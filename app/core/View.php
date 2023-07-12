<?php

class View {

    static function load($filename , $data = [])
    {
        $view = VIEWS. $filename .".php";
        if(file_exists($view))
        {
            
            extract($data);
            ob_start();
            require_once($view);
            ob_end_flush();
        }
        else
        {
            echo "ERROR: View " .$view."Not Exist";
        }
    }
} 


?>