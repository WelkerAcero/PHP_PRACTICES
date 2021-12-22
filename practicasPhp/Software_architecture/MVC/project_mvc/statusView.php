<?php
require_once('StatusController.php');

echo '<h1>CRUD con MVC de la tabla Status <h1>';

$status = new StatusController();
$status_data = $status->read();
var_dump($status_data);

$num_status = count($status_data);

echo "<h2>Número de Status: <mark>{$num_status}</mark></h2>";

echo '<h2>Tabla de Status</h2>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../../../plantilla.php"); ?>

</head>

<body>
    <table class="table">
        <thead>
            <td>Status_id</td>
            <td>Status</td>
        </thead>
        <tbody>
            <?php for ($n = 0; $n < count($status_data); $n++) { ?>
                <tr>
                    <td><?= $status_data[$n]['status_id'] ?></td>
                    <td><?= $status_data[$n]['status'] ?></td>
                </tr>
        </tbody>
    <?php } ?>
    </table>

    <br>

    <h3>Insertando Status</h3>
    <?php 
    
    $new_status = array(
        "status_id" => $num_status+1,
        "status" => "Other status"
    );

    $status->create($new_status);

    ?>

    <h3>Actualizando Status</h3>
    <?php
    $update_status = array(
        "status_id" => 6,
        "status" => "Canceled",
    );

    //$status->update($update_status);

    ?>

    <h3>Eliminar Status</h3>
    <?php
        //$status->delete(6);
    ?>
</body>

</html>