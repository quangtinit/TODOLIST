<?php

function view($viewName, $context=[])
{
    extract($context);
    $filePath = str_replace('.', '/', $viewName);
    require "views/{$filePath}.php";
}

function dd($obj)
{
    echo '<pre>';
    die(var_dump($obj));
    echo '</pre>';
}

function redirect($endpoint)
{
    header("Location: /{$endpoint}");
}