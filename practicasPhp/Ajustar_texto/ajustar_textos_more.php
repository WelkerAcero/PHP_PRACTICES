<?php


#================================= Eliminar espacios en blanco ============================================
$titulo = "text: ";
$palabras = " Hola a todos esto es una prueba \n";
$palabras2 = "para eliminar espacios en blancos \n";


/*
ltrim($cadena): Elimina los espacios en blanco del inicio de la
cadena

rtrim($cadena):los elimina del final de la cadena

trim(cadena): los elimina del inicio y final de la cadena
Funciones de
*/

echo trim($titulo),trim($palabras),"\n";


#==============================ajustar el ancho de caracteres==============================================

/*
cadena de texto, utilizando la función wordwrap($cadena,$ancho, $salto_de_linea, $no_cortar_palabras).
Esta función, recibirá 1 parámetro obligatorio ($cadena) y tres
parámetros opcionales:
$ancho cantidad de caracteres
$salto_de_linea el carácter o patrón que se utilizará para
crear el salto de línea. Ejemplo: \n o <br/>.
$no_cortar_palabras si se establece en TRUE, PHP tendrá
cuidado de insertar el salto, sin cortar palabras.
*/

$texto = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti eaque, eius consectetur ratione enim ut libero, eligendi maiores quibusdam ipsum sapiente facere fuga fugit ab ullam labore minima sed possimus.";

$formato = wordwrap($texto, 60, chr(10), True);

echo $formato;


?>