<?php

/* Modificar la sesión
Si se desea modificar la ID de sesión, debe pasarse como
parámetro a session_id(): */

session_id('nuevoID');
echo session_id(),"\n";

/* En cambio, si se desea modificar cualquier variable de
sesión, creada por nosotros, bastará con modificar el array
superglobal $_SESSION: */

$_SESSION['usuario'] = 'javier_1975';
echo $_SESSION['usuario'];


?>