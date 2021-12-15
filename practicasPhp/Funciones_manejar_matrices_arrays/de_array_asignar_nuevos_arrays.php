<?php

$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia','Raul', 'Esteban', 'Diego');


$grupos = array_chunk($personas, 3);

foreach ($grupos as $numero => $grupo) {
    $nombre_array = "grupo_{$numero}";
    $$nombre_array = $grupo;
    print_r($$nombre_array);
}
#resultado
/* Array
(
    [0] => Juan
    [1] => Emilse
    [2] => Pedro
)
Array
(
    [0] => Eliseo
    [1] => Rosa
    [2] => Noelia
)
Array
(
    [0] => Raul
    [1] => Esteban
    [2] => Diego
) */

