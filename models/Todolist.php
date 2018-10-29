<?php

namespace App\Models;

use App\App\App;

class Todolist
{

	public static function All()
	{
		$array = App::get('db')->select('todolist', '1', Todolist::class);

		return $array;
	}

	public static function getOne($int)
	{
		$array = App::get('db')->select('todolist', 'id = '.$int);

		return $array;
	}

}
