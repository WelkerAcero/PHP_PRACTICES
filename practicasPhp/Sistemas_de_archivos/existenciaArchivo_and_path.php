<?php

file_exists('salario.txt');

#Comprueba si un archivo o directorio existe (True) o no (False):

// validando si un archivo existe
$archivo = 'salario.txt';
if (file_exists($archivo)) {
    echo "El archivo {$archivo} existe\n";
} else {
    echo "El archivo {$archivo} no pudo localizarse\n";
}

// ahora, verificando si un directorio existe

$directorio = 'Sistemas_de_archivos';
if (file_exists($directorio)) {
    echo "El directorio {$directorio} existe";
} else {
    echo "El directorio {$directorio} no pudo localizarse";
} 

