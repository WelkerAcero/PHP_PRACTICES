<?php

setlocale(LC_MONETARY, "es_ES.UTF-8");

$bruto = 178.45;
$iva = $bruto * 0.21;
$neto = $bruto * 1.21;
//$bruto_txt = money_format('%(#4n', $bruto); //money_format isn't configured for windows
//$iva_txt = money_format('%(#4n', $iva);
//$neto_txt = money_format('%(#4n', $neto);
echo $bruto_txt . chr(10);
echo $iva_txt . chr(10);
echo $neto_txt . chr(10);

/*
178,45 €
37,47 €
215,92 €
*/


?>
