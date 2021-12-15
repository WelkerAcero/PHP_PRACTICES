<?php
$message = "";
function verify($valorName, $valorPassword)
{
    if ($valorName == 'Welker' && $valorPassword == "WelkerAcero123") {
        $message = "Bienvenido {$valorName}";
    } else {
        $message = "Credenciales no validas";
    }
    echo "$message";
}
    