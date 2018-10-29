<?php

require 'app/bootstrap.php';

use App\App\Request;
use App\App\Router;

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
