<?php

//Conectarse a la base de datos

$host = 'localhost';
$usuario = 'root';
$clave = '';
$conn = mysqli_connect($host, $usuario, $clave) or die('No me pude conectar a la base de datos');
