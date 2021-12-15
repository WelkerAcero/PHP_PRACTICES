<?php

$comodines = array('{TITULO}', '{SUBTITULO}');
$valores = array('Manual de PHP', 'Trabajando con arrays');
$datos = array_combine($comodines, $valores);
print_r($datos);
/*
Array
(
[{TITULO}] => Manual de PHP
[{SUBTITULO}] => Trabajando con arrays
)
 */

#================================== Combinar dos o más arrays ==================================

//array_merge($array_1, $array_2[, $mas_arrays]);

$grupo_a = array('Eliseo', 'Noemi', 'Santiago');
$grupo_b = array('Diego', 'Cecilia', 'Roman');
$personas = array_merge($grupo_a, $grupo_b);
print_r($personas);
/*
Array
(
[0] => Eliseo
[1] => Noemi
[2] => Santiago
[3] => Diego
[4] => Cecilia
[5] => Roman
)
 */


