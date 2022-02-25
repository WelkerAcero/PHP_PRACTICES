<form action="" method="post">
    <input type="text" hidden name="r" value="verification">
    <input type="submit" value="Edit profile" style="border-radius:10px; margin-left:30px; width:200px; color:white; background-color:red">
</form>

<?php

$template = '
    <article class="item" id="item">
        <img src="./public/" alt="">
        <h2 class="p1">Hola %s, te damos la bienvenida a Mexflix</h2>
        <h3 class="p1">Tus peliculas y series favoritas</h3>
        <p class="p1">Tu nombre es: <b>%s</b></p>
        <p class="p1">Tu email es: <b>%s</b></p>
        <p class="p1">Tu cumpleaños es: <b>%s</b></p>
        <p class="p1">Tu perfil de usuario tiene un nivel de <b>%s</b></p>
    </article>
    ';

if (isset($_POST['edit_user']) && isset($_POST['edit_name']) && isset($_POST['edit_email']) && isset($_POST['edit_birthday']) && isset($_POST['edit_pass']) && isset($_POST['edit_role'])) {

    //Session variables going to change because it will show the information about the profile
    //and it needs to show the new values saved.

    $_SESSION['user'] = $_POST['edit_user'];
    $_SESSION['name'] = $_POST['edit_name'];
    $_SESSION['email'] = $_POST['edit_email'];
    $_SESSION['birthday'] = $_POST['edit_birthday'];
    $_SESSION['pass'] = md5($_POST['edit_pass']);
    $_SESSION['role'] = $_POST['edit_role'];

    printf(
        $template,
        $_SESSION['user'],
        $_SESSION['name'],
        $_SESSION['email'],
        $_SESSION['birthday'],
        $_SESSION['role'],
    );

} else {
    
    printf(
        $template,
        $_SESSION['user'],
        $_SESSION['name'],
        $_SESSION['email'],
        $_SESSION['birthday'],
        $_SESSION['role'],
    );
}
