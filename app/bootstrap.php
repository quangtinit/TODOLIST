<?php

use App\App\App;
use App\App\DB;
use App\App\Connection;


require 'vendor/autoload.php';
require 'helpers/helpers.php';

App::bind('config', require 'config.php');

App::bind(
    'db',
    new DB(Connection::make(App::get('config')['database']))
);