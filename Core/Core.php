<?php

Class Core{
    public function __construct(){
        //echo "Core";
       $this->run();
    }
    public function run(){
        if(isset($_GET['pag'])){
            $url = $_GET['pag'];
        }
        if(!empty($url)){
            $url = explode('/', $url);
            $controller = $url[0]."Controller";
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $method = $url[0];
                array_shift($url);  
                if(!method_exists($controller,$method)){
                    $method = "index";
                }
            } else {                
                $method = "index";
            }
            if(count($url) > 0){
                $params = $url;
            } else{
                $params = array();
            }
        } else {
            $controller = "homeController";
            $method = "index";
            $params = array();
        }
        $getFile = "/Login/Basic-Login/Controllers/".$controller.".php";
        if(!file_exists($getFile) && !method_exists($controller,$method)){
            $controller = "homeController";
            $method = "index";
            $params = array();
        }
        $c = new $controller;
        call_user_func_array(array($c,$method),array ($params));
    }
}