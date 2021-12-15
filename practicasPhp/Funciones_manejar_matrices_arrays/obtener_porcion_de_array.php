<?php 


# Obtener un portion del array
$personas = array('Juan', 'Emilse', 'Pedro', 'Eliseo', 'Rosa', 'Noelia',
'Raul', 'Esteban', 'Diego');

$porcion = array_slice($personas, 0, 3);

print_r($porcion);




?>