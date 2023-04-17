<?php


function initControllers($controller)
{
    if (isset($_GET['page'])){

        $controller = $_GET["page"];
        include "./core/";
    }
}
