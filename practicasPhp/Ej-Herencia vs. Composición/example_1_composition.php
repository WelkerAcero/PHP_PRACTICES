<?php

class Categoria
{
    public $nombre = "";
}

class Producto
{
    public $descripcion = "";
    public $categoria = array();
    public $precio = 0.0;

    public function __construct(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
}

class PrendaDeVestir extends Producto
{
    public $marca = "";
    public $talle = "";
    public $color = "";
    public $material = "";
}

class Libro extends Producto
{
    public $titulo = "";
    public $autor = "";
    public $editorial = "";
    public $paginas = 0;
    public $encuadernacion = "";
    public $anio_edicion = 0;
}

$categoria = new Categoria();
$categoria->nombre = "Vestimenta";

$pantalon = new PrendaDeVestir($categoria);
$pantalon->descripcion = "Pantalón clásico recto";

$pantalon->marca = "Christian Dior";
$pantalon->talle = "XS";
$pantalon->color = "Negro";
$pantalon->material = "Lino";
$pantalon->precio = 978.50;

print <<<EOT
=====================================================================
DATOS DEL PRODUCTO
=====================================================================
CATEGORÍA: {$pantalon->categoria->nombre}
PRODUCTO: {$pantalon->descripcion}
MARCA: {$pantalon->marca}
TALLE: {$pantalon->talle}
COLOR: {$pantalon->color}
MATERIAL: {$pantalon->material}
PRECIO: \$ {$pantalon->precio}.-
EOT;
