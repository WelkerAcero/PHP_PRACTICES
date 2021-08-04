<?php

$args = array(10, 5, 2);
array_push($args, 3, 4); #Add value at the end of an array, new values = 3, 4

foreach ($args as $values) {
    echo $values, " - ";
}
echo "\n";
#=============================================================================================

#Un ejemplo de iteración compleja con 'foreach'

$datos_de_juan = array('Apellido' => 'Pérez', 'Fecha de nacimiento' => '23-11-1970', 'Teléfonos' => 
array('Casa' => '4310-9030',
    'Móvil' => '15 4017-2530',
    'Trabajo' => '4604-9000'),
    'Casado' => true,
    'Pasaporte' => false,
);

foreach ($datos_de_juan as $titulo => &$dato) {
    if (!is_array($dato)) {
        if ($dato === true) {
            $dato = 'SI';
        } else if ($dato === false) {
            $dato = 'NO';
        }
        echo "{$titulo}: {$dato}  - ";
    } else {
        foreach ($dato as $tipo_telefono => $numero) {
            echo "Teléfono {$tipo_telefono}: {$numero}" . chr(10);
        }
    }
} 

print_r($datos_de_juan);
  