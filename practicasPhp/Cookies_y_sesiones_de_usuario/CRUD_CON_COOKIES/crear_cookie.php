<?php

/* Para crear una cookie utilizaremos la función setcookie() de
PHP. En orden de aparición, los parámetros que esta función
recibe, son los siguientes:
Parámetros obligatorios:
1. Nombre de la cookie. Ejemplo: username
2. Valor. Ejemplo: javier75 
*/

/*
Parámetros opcionales:
3. Momento en el que debe expirar. Si no se indica,
caduca automáticamente. Ejemplo en segundos: time() + 3600 
-el equivalente a 1 hora-
4. Directorio en el cuál es válida la cookie. Se debe utilizar
'/' para que sea válida en todo el dominio. Ejemplo: '/'
5. Dominio. Ejemplo: eugeniabahit.com
6. Solo se transmite por HTTPS. Ejemplo: False
7. Solo se transmite por HTTP. Ejemplo: True. Siempre se
recomienza indicar TRUE, a fin de evitar que la cookie
pueda ser accedida mediante JavaScript, y por lo tanto,
vulnerable a ataques del tipo XSS. 
*/

$nombre = "nombre y apellido";
$valor = "Welker Acero";
$expira = time() + (3600 * 24 * 365); // 1 año
$dir = "localhost/practicasPhp";
$dominio = "desa.eugeniabahit.com"; // no será válida en www.eugeniabahit.com
$https = FALSE;
$http = TRUE;
setcookie($nombre, $valor, $expira, $dir, $dominio, $https, $http);

/* 
========================== Leer una cookie
Para leer una cookie, haremos uso del array superglobal
$_COOKIE: */

echo "Hola {$_COOKIE["nombre y apellido"]}!"; // Hola Welker Acero!



?>