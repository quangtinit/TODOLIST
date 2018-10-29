<?php

namespace App\App;

use \PDO;

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                "{$config['driver']}:host={$config['host']};dbname={$config['dbname']}",
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
