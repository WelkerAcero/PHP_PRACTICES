<?php

/* ==================== Eliminar una cookie
Para eliminar una cookie, el mejor método es volver a crear la
cookie, con valor NULL haciendo que expire antes de la fecha
actual: */

$nombre = "nombre_y_apellido";
$valor = NULL;
$expira = time() - (3600 * 24 * 365); // 1 año antes
$dir = "/";
$dominio = "desa.eugeniabahit.com";
$https = FALSE;
$http = TRUE;
setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);

?>