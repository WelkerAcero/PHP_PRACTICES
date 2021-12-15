<?php 


/*===================== Agregar y Eliminar elementos de un array =========================*/


/* Agregar elementos al inicio del array 
array_push($array, $valores)*/

$personas = array('Juan', 'Emilio');
array_push($personas, 'Miguel', 'Ana', 'Herminio');
print_r($personas);
/*
Array 
(
[0] => Juan
[1] => Emilio
[2] => Miguel
[3] => Ana
[4] => Herminio
)
*/


/* ============= Agregar elementos al final del array
array_unshift($array, $valores)
*/

$personas = array('Juan', 'Emilio');
array_unshift($personas, 'Miguel', 'Ana', 'Herminio');
print_r($personas);
/*
Array
(
[0] => Miguel
[1] => Ana
[2] => Herminio
[3] => Juan
[4] => Emilio
)
*/
/* 
========================= Eliminar el último elemento de un array
array_pop($array) */

$personas = array('Juan', 'Emilio', 'Ana');
array_pop($personas);
print_r($personas);
/*
Array
(
[0] => Juan
[1] => Emilio
)
*/



/* 
===================== Eliminar el primer elemento de un array
array_shift($array) */

$personas = array('Juan', 'Emilio', 'Ana');
array_shift($personas);
print_r($personas);
/*
Array
(
[0] => Emilio
[1] => Ana
)
*/



/*=========================== Eliminar valores duplicados en un array
array_unique($array) */

$personas = array('Juan', 'Emilio', 'Ana', 'Emilio');
$personas = array_unique($personas);

print_r($personas);
/*
Array
(
[0] => Juan
[1] => Emilio
[2] => Ana
)
*/




?>