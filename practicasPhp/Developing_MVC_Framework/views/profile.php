<?php
$template = '
    <article class="item" id="item">
        <h2 class="p1">Hola %s, te damos la bienvenida a Mexflix</h2>
        <h3 class="p1">Tus peliculas y series favoritas</h3>
        <p class="p1">Tu nombre es: <b>%s</b></p>
        <p class="p1">Tu email es: <b>%s</b></p>
        <p class="p1">Tu cumpleaños es: <b>%s</b></p>
        <p class="p1">Tu perfil de usuario tiene un nivel de <b>%s</b></p>
    </article>
    ';

printf(
    $template,
    $_SESSION['user'],
    $_SESSION['name'],
    $_SESSION['email'],
    $_SESSION['birthday'],
    $_SESSION['role'],
);
