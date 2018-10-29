<?php require 'views/layouts/top.php';?>

<section>
    <div class="left">
        <h1>Add new</h1>
        <form action="" method="post">
            <div class="item">
                <label>Name</label>
                <input required="" type="" name="name" value="<?php if($todoitem!=null){echo $todoitem[0]->name;} ?>">
            </div>
            <?php 
            if($todoitem!=null){
                $arraydatestart = explode('T',$todoitem[0]->date_start);
                $arraydateend = explode('T',$todoitem[0]->date_end);
            }
            ?>
            <div class="item">
                <label>Date Start</label>
                <input required="" autocomplete="off" type="text" class="date" name="date_start" value="<?php if($todoitem!=null){echo $arraydatestart[0];} ?>" />
                <input required="" autocomplete="off" type="text" class="time" name="time_start" value="<?php if($todoitem!=null){echo $arraydatestart[1];} ?>" />
            </div>
            <div class="item">
                <label>Date End</label>
                <input required="" autocomplete="off" type="text" class="date" name="date_end" value="<?php if($todoitem!=null){echo $arraydateend[0];} ?>" />
                <input required="" autocomplete="off" type="text" class="time" name="time_end" value="<?php if($todoitem!=null){echo $arraydateend[1];} ?>" />
            </div>
            <div class="item">
                <label>Status</label>
                <select name="status">
                    <option <?php if($todoitem!=null&&$todoitem[0]->status==1){echo 'selected=""';} ?> value="1">Planning</option>
                    <option <?php if($todoitem!=null&&$todoitem[0]->status==2){echo 'selected=""';} ?> value="2">Doing</option>
                    <option <?php if($todoitem!=null&&$todoitem[0]->status==3){echo 'selected=""';} ?> value="3">Complete</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="right">
        <h1>To Do List</h1>
        <div class="ui container">
            <div class="ui container">
              <div class="ui grid">
                <div class="ui sixteen column">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="../../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../../public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../public/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="../../public/js/moment.min.js"></script>
<script type="text/javascript" src="../../public/js/fullcalendar.min.js"></script>
<script>
    // initialize input widgets first
    $('.time').timepicker({
        'showDuration': true,
        'timeFormat': 'H:i:s'
    });

    $('.date').datepicker({
        'format': 'yyyy-mm-dd',
        'todayHighlight': true,
        'autoclose':true,
        'startDate': '-0m',
        'autoclose': true
    });
    $(document).ready(function() {
        
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            defaultDate: '<?php echo date("Y-m-d") ?>',
            navLinks: true, // can click day/week names to navigate views
            editable: false,
            eventRender: function(event, element, view) {
                element.find(".fc-content")
                .append('<a onclick="return confirm(' + "'Are you sure ?'" + ');" class="del" href="/delete?id=' + event.id + '">x</a>');
            },
            events: [
                <?php foreach ($todolists as $todolist): ?>
                {
                    id: <?php echo $todolist->id; ?>,
                    title: '<?php echo $todolist->name; ?>',
                    url: '/update?id=<?php echo $todolist->id; ?>',
                    start: '<?php echo $todolist->date_start; ?>',
                    end: '<?php echo $todolist->date_end; ?>',
                    <?php if($todolist->status=='3'){ ?>
                    color: 'gray'
                    <?php }elseif($todolist->status=='2'){ ?>
                    color: 'orange'
                    <?php } ?>
                },
                <?php endforeach;?>
            ]
        });
        
    });
</script>
<?php require 'views/layouts/bottom.php'?>