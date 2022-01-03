<?php

if(session_id()=="")
{
    session_start();
}

if($_POST)
{
    if(@$_SESSION['autentificado']!=TRUE)
    {
        $_SESSION['autentificado'] = TRUE;
        $_SESSION['nombre'] = $_POST['nombreForm'];
        $_SESSION['edad'] = $_POST['edadForm'];
    }
}

if(@$_GET['salir']=="true")
{
    session_unset();
    session_destroy();
}
?>

<html>
    <head>
        <title>Ejemplo de sesión en PHP 7</title>
    </head>
    <body>
        <?php
        if(@$_SESSION['autentificado']==TRUE){
        ?>
        <p>
            Hola <?=$_SESSION['nombre'];?>, tienes <?=$_SESSION['edad'];?> años y estás autenticado.
            <a href="?salir=true">Haz click aquí para salir</a>.
        </p>

        <?php

        }else{

        ?>

        <p>
            <strong>
                ¡Hola!, veo que no estás autentificado, por favor llena el formulario:
            </strong>
        </p>

        <form action="" method="post">
            Nombre: <input type="text" name="nombreForm"> <br> <br>
            Edad: <input type="text" name="edadForm"> <br> <br>

            <input type="subm it" value="Guardar">
        </form>

        <?php } ?>
        
    </body>
    
</html>