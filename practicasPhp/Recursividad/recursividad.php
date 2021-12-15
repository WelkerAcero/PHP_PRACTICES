<?php

$a = 2;

function funcion_recursiva($a = 0)
{
    if ($a == 0) {
        $a = 1;
        $a = funcion_recursiva($a);
    } else {
        $a = $a * 2;
    }
    echo $a;

}

funcion_recursiva($a);
