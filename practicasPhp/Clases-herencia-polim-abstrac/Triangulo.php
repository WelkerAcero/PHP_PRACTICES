<?php

class Triangulo extends Poligono
{
    private $side_a;
    private $side_b;
    private $side_c;
    private $height;

    public function __construct($a, $b, $c, $h)
    {
        $this->lados = 3;
        $this->side_a = $a;
        $this->side_b = $b;
        $this->side_c = $c;
        $this->height = $h;
    }

    public function perimetro()
    {
        return $this->side_a + $this->side_b + $this->side_c;
    }

    public function area()
    {
        return ($this->side_b * $this->height) / 2;
    }

}
