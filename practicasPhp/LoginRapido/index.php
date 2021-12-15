<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <div class="container">
        <form action="" method="POST" class="form-hor">
            <table>
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Password</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><input name="name" type="text" placeholder="Escriba su nombre"></td>
                        <td><input name="password" type="text" placeholder="Escriba su nombre"></td>
                    </tr>
                   
                </tbody>

            </table>
            <input type="submit" value="Acceder" style="color: white; background-color:green">
        </form>
    </div>

</body>

</html>

<?php

//Sirve con dos tipos de Syntax

$valor1 = $_POST['name'];
$valor2 = $_POST['password'];

include("comprobar.php");

verify($valor1, $valor2);

?>