<?php

$clave = "pepe_grillo-12_14";
$hash_clave = md5($clave);
echo $hash_clave;

#===================================================================================
/* Los posibles algoritmos de cifrado, pueden obtenerse con
la función hash_algos() la cual retorna un array con todos los
algoritmos disponibles: */

print_r(hash_algos());

#===================================================================================

#Ejemplo (correr este script para ver los resultados):
$clave = "hola";
$hashes = array();
foreach (hash_algos() as $hash) {
    $hash_clave = hash($hash, $clave);
    $hashes[$hash] = $hash_clave;
    print_r($hashes);
}

#===================================================================================

#===================================================================================

#===================================================================================
