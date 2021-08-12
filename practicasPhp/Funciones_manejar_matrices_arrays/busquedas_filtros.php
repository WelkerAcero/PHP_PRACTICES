<?php

/*
Búsquedas y filtros

Contar la cantidad de veces que los elementos aparecen en un array
array_count_values($array)*/

$frutas = array('pera', 'manzana', 'pera', 'durazno', 'melón', 'sandía',
    'kiwi', 'manzana', 'melón', 'pera', 'mandarina', 'naranja',
    'limón', 'lima', 'pomelo', 'pera');
$repeticiones = array_count_values($frutas);
foreach ($repeticiones as $tipo_fruta => $veces) {
    if ($veces > 1) {
        print_r("Se ha repetido {$tipo_fruta} {$veces} veces \n");
    }
}

/*
Usted repitió pera 4 veces
Usted repitió manzana 2 veces
Usted repitió melón 2 veces
 */

/* =============================Contar la cantidad de elementos de un array
count($array) */

$frutas2 = array('pera', 'manzana', 'durazno');
echo count($frutas2); // 3

/*
========================Obtener la suma matemática de los valores de un array
array_sum($array) */

$precios = array(75.40, 93.12, 7, 25.18, 173.60);
$total = array_sum($precios);
echo $total; // 374.3

/* ============================= Obtener las diferencias entre dos o más arrays
array_diff($array_1, $array_2[, $array_3, ….]) */

$frutas_1 = array('pera', 'manzana', 'durazno', 'melón', 'sandía', 'kiwi',
    'mandarina', 'naranja', 'limón', 'lima', 'pomelo');
$frutas_2 = array('pera', 'manzana', 'durazno', 'melón', 'sandía', 'kiwi',
    'mandarina', 'lima', 'pomelo');
$diferencias = array_diff($frutas_1, $frutas_2);
echo "Las siguientes frutas no están en los 2 arrays:" . Chr(10);
$num = 2;
echo "En el array num {$num} no se encuentra:\n";
foreach ($diferencias as $fruta_no_repetida) {
    echo "-{$fruta_no_repetida}" . Chr(10);
}
/*
Las siguientes frutas no están en los 2 arrays:
- naranja
- limón
 */

/* ======================Filtrar datos de un array, utilizando una función de retorno
array_filter($array, $funcion) */

$datos = array(25, 43.2, 64.98, 33.7, 'luna', 95, 32, 60.05, 'agua', 'sol');
function retornar_enteros($dato)
{
    if (is_int($dato)) {
        return $dato;
    }
}
function retornar_otros_datos($dato)
{
    if (!is_int($dato)) {
        return $dato;
    }
}
$enteros = array_filter($datos, 'retornar_enteros');
$otros_datos = array_filter($datos, 'retornar_otros_datos');
print_r($enteros);
/*
Array
(
[0] => 25
[5] => 95
[6] => 32
)
 */
print_r($otros_datos);
/*
Array
(
[1] => 43.2
[2] => 64.98
[3] => 33.7
[4] => luna
[7] => 60.05
[8] => agua
[9] => sol
)
*/

/*
=========================Verificar si un array contiene una clave determinada
array_key_exists($clave, $array) */

if (!array_key_exists('password', $_POST)) {
    echo 'Debe indicar una contraseña';
}

/*======================== Obtener todas las claves de un array o todos los valores
array_keys($array) - array_values($array) */

$libro = array(
    'Titulo' => 'Manual de PHP',
    'Subtitulo' => 'Trabajando con arrays',
    'Autor' => 'Eugenia Bahit',
    'Fecha' => '12/10/2011',
);

$claves = array_keys($libro);
$valores = array_values($libro);
print_r($claves);
/*
Array
(
[0] => Titulo
[1] => Subtitulo
[2] => Autor
[3] => Fecha
)
 */
print_r($valores);
/*
Array
(
[0] => Manual de PHP
[1] => Trabajando con arrays
[2] => Eugenia Bahit
[3] => 12/10/2011
)
 */
