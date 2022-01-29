<?php

class AutoLoad {
    
    public function __construct(){

        spl_autoload_register(function($className){
            //punto diagonal para indicar donde esta el archivo, el cual es Index.php
            $models_path = './Models/' . $className . '.php';
            $controllers_path = './Controllers/' . $className . '.php';

            //The if also works correctly like this
            if(file_exists($models_path))  require_once($models_path);

            if(file_exists($controllers_path))  require_once($controllers_path);

        });
    }

    public function __destruct(){
        
    }
}