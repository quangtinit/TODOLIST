<?php

namespace App\Controllers;

use App\App\App;
use App\Models\Todolist;

class TodolistController
{
    public static function index()
    {
        $todolists = Todolist::All();
        $title = 'To do list';
        $todoitem = array();

        return view('todolist.index', compact('todoitem', 'todolists', 'title'));
    }

    public static function store()
    {
        $data = array();
        $date_end = $_REQUEST['date_end'].'T'.$_REQUEST['time_end'];
        $date_start = $_REQUEST['date_start'].'T'.$_REQUEST['time_start'];
        $data['name'] = $_REQUEST['name'];
        $data['status'] = $_REQUEST['status'];
        $data['date_start'] = $date_start;
        $data['date_end'] = $date_end;

        try {
            App::get('db')->insert('todolist', $data);
        } catch (Exception $e) {
            require "views/500.php";
        }

        return redirect('');
    }

    public function update()
    {
        if(count($_REQUEST)>1){
            $data = array();
            $date_end = $_REQUEST['date_end'].'T'.$_REQUEST['time_end'];
            $date_start = $_REQUEST['date_start'].'T'.$_REQUEST['time_start'];
            $data['name'] = $_REQUEST['name'];
            $data['status'] = $_REQUEST['status'];
            $data['date_start'] = $date_start;
            $data['date_end'] = $date_end;

            try {
                App::get('db')->update('todolist', $_GET['id'], $data);
            } catch (Exception $e) {
                require 'views/500.php';
            }

            return redirect('');
        }else{
            try {
                $todolists = Todolist::All();
                $todoitem = Todolist::getOne($_GET['id']);
                $title = 'Edit';
            } catch (Exception $e) {
                require 'views/500.php';
            }

            return view('todolist.index', compact('todoitem', 'todolists', 'title'));
        }
    }

    public function delete()
    {
        try {
            App::get('db')->delete('todolist', $_GET['id']);
        } catch (Exception $e) {
            require 'views/500.php';
        }

        return redirect('');
    }
}
