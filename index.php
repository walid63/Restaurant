<?php

include "./vendor/autoload.php";

define("ROOT", str_replace('index.php', '', $_SERVER["SCRIPT_FILENAME"]));

include(ROOT . 'core/Controller.php');
include(ROOT . 'core/Model.php');

$param = explode("/", $_GET['page']);

if (isset($_GET['page'])) 
{
    if ($param[0] != "") 
    {
        $controller = ucfirst($param[0]);

        $action = isset($param[1]) ? $param[1] : 'index';

        include(ROOT . "controllers/" . $controller . "Controller.php");

        $controller = new $controller;

        if (method_exists($controller, $action)) 
        {
            $controller->$action();
            //dump($controller, $action);

        } else {

            http_response_code(404);
            echo "La page recherchée n'existe pas";
        }
    } else {
        //à faire: include error file
    }
}
