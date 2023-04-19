<?php 


abstract class Controller{

    public function render(string $file, array $data = [])
    {
        extract($data);
        
        include("./views/".$file.".php");
  
    }
}