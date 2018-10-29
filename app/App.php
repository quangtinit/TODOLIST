<?php

namespace App\App;

class App
{
    protected static $registry = [];

    public static function bind($key, $val)
    {
        static::$registry[$key] = $val;
    }

    public static function get($key)
    {
        return static::$registry[$key];
    }
}
