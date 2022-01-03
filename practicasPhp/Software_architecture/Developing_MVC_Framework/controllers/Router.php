<?php

class Router {
    public $route;

    public function __construct($route)
    {
        if( isset($_SESSION) ){
            //minimum parameters to make session_start work properly 
            session_start([
                'use_only_cookies' => 1,
                'auto_start' => 1,
                'read_and_close' => true
            ]);
            
            $_SESSION['active'] = false;
;
        }else{

        }

        //this will manage what part of our webApp going to show
        //If we are already authenticated or not.
        if( $_SESSION['active'] == true){
            //Here goes all our webApp programming

        }else{  
            //Show a authentication form

        }
    }

    public function __destruct()
    {
        
    }


}