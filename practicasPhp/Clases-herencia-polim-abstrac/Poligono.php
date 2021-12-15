<?php

abstract class Poligono{

    protected $lados;

    abstract protected function perimetro();

    abstract protected function area();


    //Esta llamara a la clase que se este usando
    public function lados()
    {
        return 'Un ' . get_called_class() . ' tiene <mark>' . $this->lados . ' </mark> lados.';
    }

}