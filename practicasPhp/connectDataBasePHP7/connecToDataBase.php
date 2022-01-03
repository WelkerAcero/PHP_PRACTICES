<html>

<head>
    <title>Ejemplo de conexión a base de datos MySQL</title>
</head>

<body>
    <?php

    // Dirección o IP del servidor MySQL
    $host = "localhost";
    // Puerto del servidor MySQL
    $puerto = "3306";
    // Nombre de usuario del servidor MySQL
    $usuario = "root";
    // Contraseña del usuario
    $contrasena = "";
    // Nombre de la base de datos
    $baseDeDatos = "tutorialphp5";
    // Nombre de la tabla a trabajar
    $tabla = "personas";
    function Conectarse()
    {
        global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
        
        if (!($link = mysqli_connect($host . ":" . $puerto, $usuario, $contrasena))) {
            echo "Error conectando a la base de datos.<br>";
            exit();
        } else {
            echo "Listo, estamos conectados.<br>";
        }
        if (!mysqli_select_db($link, $baseDeDatos)) {
            echo "Error seleccionando la base de datos.<br>";
            exit();
        } else {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
        }
        return $link;
    }
    $link = Conectarse();

    mysqli_close($link);

    $query = "SELECT Nombre, Apellidos FROM $tabla;";
    $result = mysqli_query($link, $query);
    ?>

<table>
    <tr>
        <td>Nombre</td>
        <td>Apellidos</td>
    <tr>
<?php
while($row = mysqli_fetch_array($result))
{
    printf("<tr><td>%s</td><td>%s</td></tr>", $row['Nombre'],$row['Apellidos']);
}

mysqli_free_result($result);
mysqli_close($link);

?>

</table>

</body>

</html>
