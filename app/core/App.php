<?php

class app {

# Attributes

    private $controller = "Home";
    private $method     = "index";
    private $params     = [];

    function __construct()
    {
        $this->prepare();
        $this->render();
    }
    
    /*
    * extract controller , Action , params 
    *
    */ 


    private function prepare( )
    {
        $url = $_SERVER['REQUEST_URI'];
        if ( !empty($url))
            {
                // prepare query to extract
                $url = trim($url , "/");
                $arr =  explode("/" , $url);
                
                // extract controller 
                $this->controller =  !empty($arr[0]) ? ucfirst($arr[0]) ."Controller" : "HomeController";  
                
                // extract action 
                $this->method =  !empty($arr[1]) ? $arr[1] : "index";  
                
                // extract params 
                unset( $arr[0] , $arr[1]);
                $this->params = !empty($arr) ? array_values($arr) :[];
            }
    }

    private function render( )
    {
        if( class_exists($this->controller))
        {
            if(method_exists($this->controller , $this->method))
            {
                $controller = new $this->controller;
                call_user_func_array([$controller, $this->method] , $this->params);
            }
            else
            {
                echo "ERROR: Method ". $this->method ." Not Found";
            }
        }
        else
        {
            echo "ERROR: Class ". $this->controller ." Not Found";
        }
    }
}
?>


