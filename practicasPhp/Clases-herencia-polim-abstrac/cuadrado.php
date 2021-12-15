<?php

class Cuadrado extends Triangulo{

    private $sideValue;

    public function __construct($sideValue)
    {
        $this->lados = 4;
        $this->sideValue = $sideValue;
    }

    public function perimetro()
    {
        return $this->sideValue * $this->lados;
    }

    public function area()
    {
        return pow($this->sideValue, 2);
    }


}