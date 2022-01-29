<?php
if (session_id() == "") {
    session_start();
}
?>
<html>
    <head>
        <title>Ejemplo de sesión en PHP 7</title>
    </head>

    <body>
            <pre>
        <?php
            print_r($_SESSION);
        ?>
        </pre>
    </body>
</html>