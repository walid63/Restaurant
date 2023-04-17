<?php


if(isset($_GET['page']))
{
    include "./core/controllers/".$_GET['page']."Controller.php";
}