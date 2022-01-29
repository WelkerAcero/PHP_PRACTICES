<?php 

$template = '
    <h1>Te damos la bienvenida %s</h1>
';

printf(
    $template,
    $_SESSION['name'],
);

?>