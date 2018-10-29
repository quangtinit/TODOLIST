<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?=$title?> :: PHP Basics</title>

	<link rel="stylesheet" type="text/css" href="../../public/css/jquery.timepicker.min.css" />
	<link rel="stylesheet" type="text/css" href="../../public/css/bootstrap-datepicker.css" />
	<link rel="stylesheet" type="text/css" href="../../public/css/fullcalendar.min.css" />
	<style type="text/css">
	    section{width: 1200px;margin: 0 auto;}
	    section:after{content: '';display: table;clear: both;}
	    section .left{padding-right: 15px;width: 22%;float: left;text-align: center;}
	    section .left form{padding: 12px;background-color: #e6e6e6 }
	    section .left .item{margin-bottom: 12px;text-align: left;}
	    section .left .item:after{display: table;content: '';clear: both;}
	    section .left .item label{display: block;margin-bottom: 4px;}
	    section .left .item input,section .left .item select{display: block;width: 100%;height: 34px;padding: 0 12px;font-size: 14px;line-height: 34px;color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;font-family: inherit;font-size: inherit;line-height: inherit;}
	    section .left .item input{width: calc(100% - 26px);	}
	    section .left button{color: #fff;background-color: #3071a9;border-color: #285e8e;padding: 8px 18px;border: 1px solid transparent;border-radius: 4px;cursor: pointer;}
	    section .left .item input.date{width: 50%;float: left;}
	    section .left .item input.time{width: 25%;float: right;}
	    section .right{padding-left: 15px;width: calc(78% - 30px);float: right;}
	    section .right h1{text-align: center;}
	    .fc-day-grid-event .fc-content{padding-left: 18px;position: relative;}
	    .fc-day-grid-event .fc-content .del{position: absolute;left: 0;top: 0;text-decoration: none;color: #fff;width: 12px;height: 100%;background-color: #da3a3a;font-size: 12px;text-align: center;}
	    .fc-day-grid-event{padding: 0;}
	</style>
</head>
<body>
