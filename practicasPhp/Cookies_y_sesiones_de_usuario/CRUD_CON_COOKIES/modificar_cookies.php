<?php

/* 
=========================== Modificar una cookie
La forma correcta de modificar una cookie, es sobreescribirla,
es decir, volver a crearla: 
*/

$nombre = "nombre_y_apellido";
$valor = "Juan Pérez";
$expira = time() + (3600 * 24 * 365);
$dir = "localhost/practicasPhp";
$dominio = "desa.eugeniabahit.com";
$https = FALSE;
$http = TRUE;
setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);


?>
