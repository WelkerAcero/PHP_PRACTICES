<?php

// #Diferentes formas de recoger argumentos
// #para hacer una llamada de retorno

#===============================================================================================
// función callable
function callable_func_1($arg1, $arg2, $arg3)
{
    $result = ($arg1 + $arg2) * $arg3;

    return $result;
}

// función que hará la llamada de retorno
function forma_1($funcion, $argumentos = array())
{

    $result = null;

    if (is_callable($funcion)) {
        $result = call_user_func_array($funcion, $argumentos);
    } else {
        echo "The function called doesn't exist. Not callable";
    }

    return $result;
}

// implementación forma #1
$args = array(10, 5, 2);
array_push($args, 3, 4);

$resultado = forma_1('callable_func_1', $args);
echo $resultado;

#===============================================================================================

//Forma 2: recibir argumentos 1 a 1

// función callable
function callable_func_2($arg1, $arg2, $arg3)
{
    $result = ($arg1 + $arg2) * $arg3;
    echo $result;
}

// función que hará la llamada de retorno
function forma_2()
{
    $num_args = func_num_args();
    $args = func_get_args();
    $result = null;

    // verifico que al menos se reciba 1 argumento
    if ($num_args >= 1) {
        // obtengo el nombre de la función (asumo que es el 1er arg.)
        $funcion = func_get_arg(0);

        // Elimino el nombre de la función de los argumentos
        array_shift($args); // elimino el índice 0
        // Verifico que sea una función callable y la llamo
        if (is_callable($funcion)) {
            $result = call_user_func_array($funcion, $args);
        }
    }
    echo $result;
}

// implementación
$funcion = 'callable_func_1';
$arg1 = 10;
$arg2 = 5;
$arg3 = 2;
$resultado = forma_2($funcion, $arg1, $arg2, $arg3);
echo $resultado;
