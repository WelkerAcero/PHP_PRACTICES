<?php

//Elimina los saltos de línea y los espacios finales de una cadena.
$texto = "Elimina los saltos de línea y los espacios finales de una cadena \naqui viene salto de linea";
echo chop($texto);


//Rather use rtrim(). Usage of chop() is not very clear nor consistent 
//for people reading the code after you.

//If you are searching for a function that does the same trick as chop 
//in PERL, then you should just do the following code:

$str = substr($texto, 0, -1);
echo "\notro:",$str,"\n";


//The question is: why isn't chop() an alias of the code above, rather 
//than something which will trap developpers?


echo "<pre>";//without <pre> you cann't see desired output in your browser
echo chop("   Ramki   ");//right spaces are eliminated
echo chop("Ramkrishna", "a..z");
echo "</pre>";