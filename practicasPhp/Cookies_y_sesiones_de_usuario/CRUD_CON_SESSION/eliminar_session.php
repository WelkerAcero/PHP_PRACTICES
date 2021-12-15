<?php

/* Eliminar una variable de sesión
Para eliminar una variable de sesión, ésta, puede destruirse
mediante 
unset($_SESSION['nombre_de_la_variable_de_sesion']
*/

session_start();
unset($_SESSION['usuario']);


/* 
Pero para destruir la sesión completa del usuario
(incluyendo la ID de sesión), se debe recurrir a la función
session_destroy() y eliminar la cookie con el nombre de la
sesión, el cual se obtiene mediante session_name(): 
*/

//session_start(); // reanudo la sesión
unset($_SESSION); // destruyo todas las variables de sesión creadas
// obtengo los parámetros de la cookie de sesión
// los necesitaré para poder destruirla
$datos_cookie = session_get_cookie_params();

// sobreescribo la cookie de sesión -la eliminosetcookie(
setcookie(session_name(), NULL, time()-999999, $datos_cookie["path"],
$datos_cookie["domain"], $datos_cookie["secure"],$datos_cookie["httponly"]);

session_destroy(); // destruyo la sesión


?>