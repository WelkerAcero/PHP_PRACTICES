<?php

class AutoLoad(){
    public function __construct(){

        spl_autoload_register(function (){
             
        });

    }

    public function __destruct(){
        unset($this);
    }
}