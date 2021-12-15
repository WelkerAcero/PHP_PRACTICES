<?php

/* Funciones simples de fecha y hora */

print_r(getdate());


#-===============/* Obtener fecha y hora actual con formato en una cadena de texto */==========

echo date('Y-m-d'),"\n";

//Mas aqui =
//http://nc.php.net/manual/es/ref.datetime.php

// LIBRO PHP PAG 140 - 143


#==Pagina 144===
/* Cálculo de fecha / hora sencillo
Es posible realizar cálculos sencillos con la fecha y hora,
combinando el uso de las funciones date() y time(): */

$hoy = date('Y-m-d');
$manana = date('Y-m-d', (time() + (1 * 24 * 60 * 60)));
$ayer = date('Y-m-d', (time() - (1 * 24 * 60 * 60)));

echo $ayer," Ayer" . chr(10) . $hoy," Hoy" . chr(10) . $manana," Mañana" . chr(10);


/* ¿Cuánto tiempo ha pasado?

Problema:
El 15 de marzo de 2011, Natalia le comentó a su madre, que
comenzaría a ahorrar dinero para comprar un nuevo ordenador
y que a tal fin, todos los días guardaría en una caja de zapatos,
$2,75. ¿Cuánto dinero habrá ahorrado Natalia a la fecha de
hoy?

Solución: */
// obtengo la marca de tiempo para el 15/03/2011
$fecha_inicio = mktime(0, 0, 0, 3, 15, 2011);
// obtengo la marca de tiempo para hoy
$fecha_fin = mktime();
// obtengo la diferencia timestamp entre ambas fechas
$diferencia = ($fecha_fin - $fecha_inicio);
// convierto a días la diferencia timestamp
$dias = $diferencia / (24 * 60 * 60); # días que pasaron entre dos fechas
// dinero ahorrado x día
$dinero = 2.75;
// obtengo el importe total ahorrado,
// multiplicando los días x el importe diario
$ahorro = $dias * $dinero;
// Imprimo el resultado
echo $ahorro;

#============================================================================================
/* ¿En qué fecha nació...?

Problema:
Luciana tiene hoy, 15 años ¿En qué fecha pudo haber nacido
Luciana?

Solución: */
// edad actual de Luciana en años
$edad = 15;
// probable año de nacimiento de luciana
$anio = (int)date('Y') - $edad;
// probable fecha de nacimiento más antigua
$probable_mas_antigua = date('d/m/') . ($anio-1);
// probable fecha de nacimiento más reciente
$probable_mas_reciente = date('d/m/') . $anio;
echo <<<EOT
Luciana tiene que haber nacido después del $probable_mas_antigua 
y antes o durante el $probable_mas_reciente .
EOT;


?>