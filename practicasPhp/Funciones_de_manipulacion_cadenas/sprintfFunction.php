<?php

// https://www.php.net/manual/es/function.sprintf.php
$num = 5;
$ubicación = 'árbol';

$formato = 'Hay %d monos en el %s';
echo sprintf($formato, $num, $ubicación);
echo "\n";


//////

echo sprintf("%'.4d\n", 123);
echo sprintf("%'.09d\n", 123);

?>