<?php

/* Dividir un array en matrices más pequeñas

array_chunk($array, $tamaño[, boolean
$conservar_claves]);

Nótese que el tercer argumento es opcional. Por defecto,
array_chunk, creará nuevas claves en los nuevos array. Pero si
se indica TRUE, conserverá estas claves.
*/
/* 
$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia',
'Raul', 'Esteban', 'Diego');

$grupos = array_chunk($personas, 3);
print_r($grupos);



 */

$admin_data = array(
    'email'=> 'welkerpere97@gmail.com',
    'password'=>'welker',
);

foreach ($admin_data as $key => $value) {
    if($key == 'password'){
        echo $value;
    }
}



?>