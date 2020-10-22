<?php

ini_set('error_reporting', true);
ini_set('display_errors', E_ALL);

if (isset($_GET['page'])) {
    $controller = strtolower($_GET['page']);
    $controller = ucfirst(($_GET['page']) . 'Controller');
    $controllerFile = 'Controllers/' . $controller . '.php';

    if (file_exists($controllerFile)) {
        require_once $controllerFile;
    }
}

/*
 * localhost:8000/?page=articles
 */