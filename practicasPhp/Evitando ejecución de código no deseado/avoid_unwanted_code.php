<?php
#=======================Evitando ejecución de código no deseado#===============================================

/*Una función que deberá utilizarse toda vez que quiera evitarse
la ejecución de código PHP y HTML no deseado, es:
*/
//strip_tags($cadena, $caracteres_permitidos);
/*
Esta función eliminará todas las etiquetas PHP y HTML
exceptuando aquellas que se indiquen como caracteres
permitidos:
*/

$caracteres_permitidos = "<b></b>";

$cadena = "<p>Hola <b>Mundo</b></p><script language='javascript'>alert('hola');</script>
<?php
echo $caracteres_permitidos;
?>";
$resultado = strip_tags($cadena, $caracteres_permitidos);
echo $resultado,"\n";

// salida: Hola

?>
