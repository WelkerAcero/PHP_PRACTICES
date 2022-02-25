<?php

$letras = array('W','A','E','F','L','H','C','J','O','O','M','T','E');

$n = count($letras);

$izq = 0; $der = 0; $aux = 0;

$salida = "";


for ($i=0; $i < $n; $i++) { 
    if($aux > $n) break;

    $der = $aux + 1;
    while($der >= $izq){
        if ($der == $izq) {
            $salida += $letras[$aux];
            $aux = $aux + $izq;
            
        }
        $der--;
    }
    $izq++;

}

echo $salida;
