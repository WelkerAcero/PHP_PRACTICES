<?php
# Trae los datos del formulario
function get_idioma()
{
    $pagina = "paginas/hola_esp.html";
    if (isset($_POST['idioma'])) {
        $idioma = $_POST['idioma'];
        switch ($idioma) {
            case 'esp':
                $pagina = "paginas/hola_esp.html";
                break;
            case 'en':
                $pagina = "paginas/hola_en.html";
                break;
        }
    }
    return $pagina;
}
# Modifica el idioma elegido – crea o modifica la cookie
function cambiar_idioma()
{
    $pagina = get_idioma();
    setcookie("pagina", $pagina, time() + (3600 * 24 * 365));
    header('Location: index.php');
}
# Trae el contenido de la página según el idioma, mostrar contenido con file_get_contents($valor)
function get_pagina()
{
    if (isset($_COOKIE['pagina'])) {
        $pagina = $_COOKIE['pagina'];
    } else {
        $pagina = "paginas/hola_esp.html";
    }
    return file_get_contents($pagina);
}
# Muestra la página al usuario
function mostrar_pagina()
{
    $plantilla = file_get_contents("template.html");
    $contenido = get_pagina();
    $html = str_replace("{PAGINA}", $contenido, $plantilla);
    echo $html;
}
