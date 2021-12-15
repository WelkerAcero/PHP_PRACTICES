<?php
# Dejaremos ya iniciada una sesión
session_start();
# aquí copiaremos nuestro hash MD5 obtenido con PHP-CLI
const HASH_ACCESO_USERNAME = "70c760b76b0bb851d0ed4fe8f0830130ab9db9268229d68116e6fdca9cc926ac";
const HASH_ACCESO_PASSWORD = "c2940375265dd74f4e74c81b4add9f248cfb4dbb92b10ef46f42b2be6d4abf74";
# formulario.html será el que pida el ingreso de user y pass al usuario
const PAGINA_LOGIN = "formulario.html";
# esta será una página cualquiera, con acceso restringido, a la cual
# redirigir al usuario después de iniciar su sesión en el sistema
const PAGINA_RESTRINGIDA_POR_DEFECTO = "pagina_de_muestra.php";
?>