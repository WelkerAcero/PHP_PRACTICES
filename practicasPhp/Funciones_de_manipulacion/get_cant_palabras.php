<?php
$nombre_y_apellido = "Juan P.";
$datos = str_word_count($nombre_y_apellido);
echo "Tiene $datos palabras";

if (count($datos) < 2) {
    echo "{$nombre_y_apellido} no es un nombre y apellido válido";
} else {
    foreach ($datos as $dato) {
        if (strlen($dato) < 2) {
            echo "Por favor, no utilices iniciales.";
        }
    }
}


