<?php

class Objeto
{
    public $color = "";
    public $tamanio = "";
    public $aspecto = "";
    public $antenas = array(); # será otro objeto
    public $ojos = array(); # será otro objeto
    public $pelos = array(); # será otro objeto
    
    function set_antena(Antena $antena)
    {
        $this->antenas[] = $antena;
    }
    function set_ojo(Ojo $ojo)
    {
        $this->ojos[] = $ojo;
    }
    function set_pelo(Pelo $pelo)
    {
        $this->pelos[] = $pelos;
    }
}

/* $stablish = new Objeto();
$stablish2 = $stablish->set_antena(); */
