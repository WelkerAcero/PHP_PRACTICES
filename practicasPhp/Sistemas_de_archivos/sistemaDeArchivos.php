<?php

$recurso = opendir('../proyecto');
$lista = array();
$lista2 = array();

while ($res = readdir($recurso) !== false) {
    $lista[] = $res . readdir();
}

print_r($lista);
closedir($recurso);
