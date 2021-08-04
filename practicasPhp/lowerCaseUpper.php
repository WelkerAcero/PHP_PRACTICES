<?php

$texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Deleniti eaque, eius consectetur ratione enim ut libero, eligendi 
maiores quibusdam ipsum sapiente facere fuga fugit ab ullam labore minima sed possimus.";

/*Podemos necesitar convertir toda una cadena a
minúsculas con strtolower($cadena), o solo convertir a
minúscula, el primer carácter de una cadena con
lcfirst($cadena): y colocar en mayuscula el primer caracter
de una cadena con ucwords($cadena)*/

echo strtolower($texto),"\n";

$usuario = "AnGgie";
echo strtolower($usuario),"\n"; // anggie
echo lcfirst($usuario),"\n"; // anGgie
echo ucwords($usuario),"\n"; // AnGgie

$usuario2 = strtolower($usuario); // anggie
echo ucwords($usuario2); // Anggie

$nombre_y_apellido = "Anggie Lopez";
$username = strtolower($nombre_y_apellido);
$nombre_visible = ucwords($username);



?>