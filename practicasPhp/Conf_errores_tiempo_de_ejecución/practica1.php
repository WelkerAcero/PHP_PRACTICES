<?php

const PRODUCCION = false; // en entornos de producción, cambiar a True
if (!PRODUCCION) {
    ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
    ini_set('display_errors', '1');
    ini_set('track_errors', 'On');
} else {
    ini_set('display_errors', '0');
}

/* =================== Utilizando el símbolo @ para silenciar errores =======================

En PHP, es posible silenciar errores anteponiendo una arroba
(@) a la instrucción que podría generar un error. Es una
práctica que debe utilizarse con sumo cuidado y siempre que
se quiera capturar el error (a pesar de estar silenciado), deberá
establecer track_errors en On a fin de obtener dicho error
mediante la variable $php_errormsg.
*/

ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
ini_set('display_errors', '0');
ini_set('track_errors', 'On');
$archivo = @fopen('archivo_que_no_existe.txt', 'r');
if (!$archivo) {
    echo $php_errormsg;
}

// Sin embargo, podríamos ocultar esta información al usuario:

ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
ini_set('display_errors', '0');
ini_set('track_errors', 'On');
$archivo = @fopen('archivo_que_no_existe.txt', 'r');
if (!$archivo) {
    echo 'Ha ocurrido un error en el sistema. Disculpe las molestias.';
}

/*
De esta forma, el usuario solo verá el siguiente mensaje:
Ha ocurrido un error en el sistema. Disculpe las molestias. 
*/