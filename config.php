<?php

return [
    'database' => [
        'dbname' => 'todolist_db',
        'username' => 'root',
        'password' => '',
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
    'DEBUG' => true,
];
