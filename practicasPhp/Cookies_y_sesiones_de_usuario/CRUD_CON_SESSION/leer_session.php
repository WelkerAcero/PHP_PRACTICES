<?php

/* Leer una sesión
Si se desea obtener la ID de sesión, habrá que recurrir a la
función session_start() como se indicó anteriormente. Para leer
una sesión creada por nosotros, bastará con invovar al array
superglobal $_SESSION['nombre_de_la_sesion']: */


require_once('crear_session.php'); // Trae el contenido donde la session fue creada para luego consultar
session_start(); // Nos indicara que ya fue iniciada ya que estamos trayendo la session iniciada con el require_once
echo $_SESSION['usuario']; // javier75



?>