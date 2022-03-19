<?php

/* $data = [
    ['nombre' => 'Welker', 'fecha_nacimiento' => '1997-03-13'],
    ['nombre' => 'Pedro', 'fecha_nacimiento' => '2000-07-14'],
    ['nombre' => 'Juan', 'fecha_nacimiento' => '2005-07-10'],
    ['nombre' => 'Anggie', 'fecha_nacimiento' => '1997-07-10'],
    ['nombre' => 'Rodrigo', 'fecha_nacimiento' => '1997-03-13'],
    ['nombre' => 'Santiago', 'fecha_nacimiento' => '1950-03-13'],
];

$jovenes = array();
$adulto = array();
$mayor = array();

foreach ($data as $key => $value) {
    print_r($value['fecha_nacimiento'], '\n');

    $firstDate = $value['fecha_nacimiento'];
    $secondDate = "2022-03-17";

    $dateDifference = abs(strtotime($secondDate) - strtotime($firstDate));

    $years  = floor($dateDifference / (365 * 60 * 60 * 24));
    $months = floor(($dateDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days   = floor(($dateDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    if ($years > 0 && $years <= 18) {        
        array_push($jovenes, $value['nombre']);  
    } elseif ($years > 18 && $years<=35) {
        array_push($adulto, $value['nombre']);
    } else {
        array_push($mayor, $value['nombre']);
    }

}
echo 'Array de jovenes: ';
$jovenes=array_unique($jovenes);
print_r($jovenes);

echo 'Array de adultos: ';
$adulto=array_unique($adulto);
print_r($adulto);

echo 'Array de mayores: ';
$mayor=array_unique($mayor);
print_r($mayor);
 */




?>