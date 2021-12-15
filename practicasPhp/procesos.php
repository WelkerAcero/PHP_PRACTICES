<?php 

function h($divisor, $bound){
    $max = 0;
    foreach(range($divisor, $bound) as $i){
        if($i % $divisor == 0){
            $max = $i;
        }
    }
    return $max;
}

print(h(3,10));


?>