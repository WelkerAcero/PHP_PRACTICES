<?php

class SessionController {
    
    private $session;

    public function __construct(){
        $this->session = new UsersModel();
    }

    public function set($user_data = array()){
        return $this->session->set($user_data);
    }

    public function get(){
        return $this->session->get();
    }

    public function login($user, $pass){
        return $this->session->validate_user($user, $pass);
    }

    public function signup($user_data = array()){
        return $this->session->set($user_data);
    }

    public function logout(){
        session_start();
        session_destroy();
        header('Location: ./');
    }
    
    

}