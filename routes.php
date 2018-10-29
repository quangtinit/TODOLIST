<?php

$router->get('', 'TodolistController@index');
$router->post('', 'TodolistController@store');
$router->get('delete', 'TodolistController@delete');
$router->get('update', 'TodolistController@update');
$router->post('update', 'TodolistController@update');
