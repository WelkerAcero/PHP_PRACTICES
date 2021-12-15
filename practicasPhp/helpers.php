<?php

#==========================================================================================
#Get Fechas

$hoy = getdate();
#print_r($hoy);

#=========================================================================================
/*
Retorna la fecha actual en formato largo, corto o ISO (canónico)
Argumentos:
$formato -- largo, retorna la fecha actual en formato
Lunes, 2 de Agosto de 2011
corto, retorna la fecha en formato 02/08/2011
ISO, retorna la fecha en formato 2011-08-02
 */

function get_fecha_actual($formato)
{
    // defino un array con los patrones de formato
    $formato_fecha = array(
        "largo" => "l, j \d\e F \d\e Y",
        "corto" => "d/m/Y",
        "ISO" => "Y-m-d",
    );

    // inicializo la variable $fecha
    $fecha = null;

    // compruebo que $formato sea un formato válido
    if (array_key_exists($formato, $formato_fecha)) {
        // si el formato es válido, reasigno el valor a $fecha
        $fecha = date($formato_fecha[$formato]);
    }
    // retorno la fecha formateada
    return $fecha;

}

##========================================================================================

/*
Llama a la función indicada y reasigna el valor de una variable
global, formateado por la función indicada
Argumentos:
$variable -- variable global a ser modificada
$funcion -- función a la cual debe llamarse para dar formato a $variable
$argumentos -- (opcional) parámetros que eventualmente puedan
ser requeridos por $funcion
 */

function set_variable_global(&$variable, $funcion, $argumentos = array())
{
    // compruebo que $funcion sea una función callable
    if (is_callable($funcion)) {
        $variable = call_user_func_array($funcion, $argumentos);
    }
}








?>
