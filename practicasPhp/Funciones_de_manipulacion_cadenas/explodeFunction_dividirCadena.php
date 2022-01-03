<?php

$contactos = "Juan Antonio Avila <avila@mail.com>,
Rodrigo Mancusso <rmancu@mail.com>,
Silvina D'laggio <dlaggio@mail.com>
";
$patron = ",";
$personas = explode($patron, $contactos);
foreach ($personas as $persona) {
    echo $persona;

}
