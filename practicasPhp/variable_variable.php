<?php

$a = "mi_variable";
$$a = 75;
echo "El nombre de \$\$a es \${$a}\n";

echo "$a, ${$a}";

?>