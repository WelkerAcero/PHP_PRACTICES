<?php

/* 
En tiempo de ejecución, mediante la función ini_set() de
PHP, se pueden establecer ciertas directivas de configuración,
relativas a los errores y registro de los mismos. */

/* 'error_reporting'
Establece que tipo de errores son reportados
ini_set('error_reporting', E_ALL & E_DEPRECATED);
E_ALL & ~E_NOTICE
*/

/* 'display_errors'
Determina si se deben mostrar o no los errores
en pantalla
ini_set('display_errors', '0');
String 1 
*/

/* 'track_errors'
Indica si el último error encontrado, estará
disponible a través de la variable
$php_errormsg
ini_set('track_errors', 'On');
String Off 
*/

/* 'error_prepend_string'
Cadena a imprimir antes del mensaje de error
ini_set('error_prepend_string', 'Error
encontrado:');
NULL 
*/

/* 'error_append_string'
Cadena a imprimir después del mensaje de
error
ini_set('error_prepend_string',
'<hr/>');
NULL */


/* ================ Un ejemplo sencillo pero altamente productivo =======================================
Como comentamos anteriormente, cuando nuestra aplicación
corriese en un entorno de producción, los errores deberían
ocultarse. Sin embargo, mientras que se esté trabajando en un
entorno de desarrollo, podrían estar visiblemente activos para
ayudarnos a depurar nuestro código. 
*/

/* 
Una forma simple de lograr esto, es crear un archivo de
configuración para la aplicación que deba ser importado por 
todos los archivos de la aplicación, que decida si mostrar o no los errores, 
según el valor de una constante creada a tal fin,
que llameremos PRODUCCION, estableciendo su valor por
defecto en False (significará que estamos en entorno de
desarrollo) y al subir a producción, la setearemos en True: 
*/


?>