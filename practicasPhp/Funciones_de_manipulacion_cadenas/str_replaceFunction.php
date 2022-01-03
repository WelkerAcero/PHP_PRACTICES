<?php 

$email = "juanperez@dominio.com";
$mail_no_spam = str_replace("dominio", "gmail", $email);
echo $mail_no_spam,"\n"; // juanperez@gmail.com

#====================================================================================================

/*Esta función, admite como parámetros de búsqueda y
reemplazo, tanto cadenas de texto, como matrices:*/

$email2 = "juanperez@dominio.com";
$busqueda = array("@", ".");
$reemplazo = array(" [AT] ", " [DOT] ");
$mail_no_spam2 = str_replace($busqueda, $reemplazo, $email);
echo $mail_no_spam2,"\n"; // juanperez [AT] dominio [DOT] com

#====================================================================================================

$username = " alejo val3nt1n0 ";
$busqueda2 = array(" ", "\t", "\n", "\r", "\0", "\x0B","0","N");
$username = str_replace($busqueda2, '', $username);
echo $username,"\n"; // alejoval3nt1n

#====================================================================================================

/* Es posible también, realizar reemplazos, haciendo que la
búsqueda sea insensible a mayúsculas y minúsculas. Para ello,
debemos utilizar la función str_ireplace($busqueda,
$reemplazo, $cadena) de la misma forma que lo haríamos
con str_replace(). */

$username2 = " alejo val3nt1n0 ";
$busqueda3 = array(" ", "\t", "\n", "\r", "\0", "\x0B","0","N");
$username2 = str_ireplace($busqueda3, '', $username2); // insensible a mayusculas 'ireplace'
echo $username2,"\n"; // alejoval3t1

#====================================================================================================

// Str_replace()
echo "<strong>Ejemplo de Str_replace()</strong> <br>";
$vocales = array("a", "e", "i", "o", "A", "E", "I", "O");
$cadenSTRreplace = "Hola mundo. Esta es una cadena a evaluar.";
$reemplazador = array("4", "3", "1", "0", "4", "3", "1", "0");
$cadenSTRreplace = str_replace($vocales , $reemplazador, $cadenSTRreplace);
echo $cadenSTRreplace."<br>";
echo "<hr>";

?>