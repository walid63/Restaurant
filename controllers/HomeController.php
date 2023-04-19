<?php 
include "./views/includes/head.php";

class Home extends Controller
{

   /* public function __construct()
    {
       
        $initIndex =  $this->index();
    }*/

    public function index()
    {
        $title = "";
        $data = [
            "title" => $title,

        ];
        $file = "home/home";
        $this->render($file);
    }

}


