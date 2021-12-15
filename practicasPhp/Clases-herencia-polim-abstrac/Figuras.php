<?php

require("poligono.php");
require("triangulo.php");
require("cuadrado.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figures calcules sides</title>
</head>

<body>
    <h1>Calculate the perimeter and area of a equilateral triangle</h1>
    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <td>Write side a</td>
                    <td>Write side b</td>
                    <td>Write side c</td>
                    <td>Write the height</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="side_a" placeholder="side_a here"></td>
                    <td><input type="text" name="side_b" placeholder="side_b here"></td>
                    <td><input type="text" name="side_c" placeholder="side_c here"></td>
                    <td><input type="text" name="height" placeholder="height here"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Calculate" style="margin-left:3px;">
    </form>

    <!-- Triangle process -->
    <?php
    if (isset($_POST['side_a'], $_POST['side_b'], $_POST['side_c'], $_POST['height'])) {
        $data1 = $_POST['side_a'];
        $data2 = $_POST['side_b'];
        $data3 = $_POST['side_c'];
        $data4 = $_POST['height'];

        $triangulo = new Triangulo($data1, $data2, $data3, $data4);
        echo '<h3>' . $triangulo->lados() . '</h3>';
        echo '<h3> El perimetro del ' . get_class($triangulo) . ' : es = ' . $triangulo->perimetro() . '</h3>';
        echo '<h3> El área del ' . get_class($triangulo) . ' : es = ' . $triangulo->area() . '</h3>';
    } else {
        echo "";
    }
    ?>

    <h1>Calculate the perimeter and area of a square</h1>
    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <td>Write the value of the side</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="side" placeholder="side_a here"></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Calculate" style="margin-left:3px;">
    </form>

    <!-- Square process -->
    <?php
    if (isset($_POST['side'])) {
        $data1 = $_POST['side'];

        $cuadrado = new Cuadrado($data1);
        echo '<h3>' . $cuadrado->lados() . '</h3>';
        echo '<h3> El perimetro del ' . get_class($cuadrado) . ' : es = ' . $cuadrado->perimetro() . '</h3>';
        echo '<h3> El área del ' . get_class($cuadrado) . ' : es = ' . $cuadrado->area() . '</h3>';
    } else {
        echo "";
    }

    ?>

</body>

</html>