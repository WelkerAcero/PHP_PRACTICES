<?php

$cadena = "Lorem ipsum ad his scripta blandit partiendo, eum fastidii
accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus
suscipiantur, quo dicit ridens inciderint id. Quo mundi lobortis reformidans
eu, legimus senserit definiebas an eos. Eu sit tincidunt incorrupte
definitionem, vis mutat affert percipit cu, eirmod consectetuer signiferumque
eu per. In usu latine equidem dolores. Quo no falli viris intellegam, ut
fugit veritus placerat per.";
$resumen = substr($cadena, 0, 100);
echo "{$resumen}[...]\n\n";

/* Un ejemplo un poco más complejo, puede darse con el uso
combinado de varias funciones: */
$patron = "dicit";
$inicio_patron = stripos($cadena, $patron);
if ($inicio_patron !== false) {
    echo substr($cadena, $inicio_patron, strlen($cadena)),"\n\n";
}else{
    $resumen = substr($cadena, 0, 100);
    echo "{$resumen}[...]\n\n";
}

/* Con substr_count($cadena, $patron) podremos obtener la
cantidad de veces que el patrón es encontrado en la cadena: */

$patron2 = "ut";
$apariciones = substr_count($cadena, $patron2);
echo "Palabra 'ut' aparece $apariciones veces \n\n"; // 3

#==========================================================================================

/* Es posible también, reemplazar una subcadena dentro de una
cadena con substr_replace($cadena, $reemplazo,
$inicio, $longitud): */

$cadena2 = "Ayer recorrí las calles de Liniers con mi primo";
$lookFor = "las calles de Liniers";
$find = stripos($cadena2, $lookFor);
$cadena_nueva = substr_replace($cadena2, "las calles de Bogota", $find, strlen($lookFor));
echo $cadena_nueva,"\n\n";


#==========================================================================================

$var = 'ABCDEFGH:/MNRPQR/';
/* Estos dos ejemplos reemplazan todo $var por 'bob'. */
echo "Palabra = '$var' cambia a = ",substr_replace($var, 'bob', 0),"\n\n";
echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n\n";

/* Inserta 'bob' justo al comienzo de $var. */
echo substr_replace($var, 'bob', 0, 0) . "<br />\n\n";

#==========================================================================================


