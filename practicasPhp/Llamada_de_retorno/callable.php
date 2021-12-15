<?php 

function fun(){ 
    print("HOLA \n");
}

function otraFun($funcion){
    if (is_callable($funcion)){
        echo "Es callable. Result:";
        echo call_user_func($funcion);
    }else{
        echo "No es Callable \n";
    }
}

otraFun('fun');
echo "\n";

// #=====================================================
function sumarNumeros($a, $b){
    
    return $a+$b;
}

$num1 = 10;
$num2 = 5;

$resultado = call_user_func('sumarNumeros',$num1, $num2);

echo $resultado;
//#==================================================================================

function sumar($a,$b,$c){
    return $a+$b+$c;
}

$values = array(5,10);

$result = call_user_func_array('Function',$values);

echo $result;

?>