<?php

/*
Comparo ambos hashes. Si son idénticos, retorno Verdadero
 */
require_once 'settings.php';
function validar_user_y_pass()
{
    $u = "";
    $p = "";

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $u = hash("sha256", $_POST['username']);
        $p = hash("sha256", $_POST['password']);

        if (($u == HASH_ACCESO_USERNAME) && ($p == HASH_ACCESO_PASSWORD)) {
            $_SESSION['login_date'] = time();
            header('Location: pagina_de_muestra.php');
        } else {
            header('Location: formulario.html');
            echo "Credenciales invalidas";
        }
    }

}

function logout()
{
    unset($_SESSION);
    $datos_cookie = session_get_cookie_params();
    setcookie(session_name(), null, time() - 999999,
        $datos_cookie["path"], $datos_cookie["domain"],
        $datos_cookie["secure"], $datos_cookie["httponly"]
    );

    header("Location: formulario.html");

}

function getLastAccess()
{
/*
Primero verifico que la variable de sesión login_date, existe. De ser
así, obtengo su valor y lo retorno.
Si no existe, retornará el entero 0
 */
    $lastLogin = 0;
    if (isset($_SESSION['login_date'])) {
        $lastLogin = $_SESSION['login_date'];
    }
    return $lastLogin;
}

function sessionActive()
{
/* Esta función, retornará el estado de la sesión:
sesión inactiva, retornará False mientras que sesión activa,
retornará True.
Al mismo tiempo, se encarga de actualizar la variable de sesión
login_date, cuando la sesión se encuentre activa */

    $estado_activo = false;
    $ultimo_acceso = getLastAccess(); //function already defined

/*
Establezco como límite máximo de inactividad (para mantener la
sesión activa), media hora (o sea, 1800 segundos).
De esta manera, sumando 1800 segundos a login_date, estoy definiendo
cual es la marca de tiempo más alta, que puedo permitir al
usuario para mantenerle su sesión activa.
 */

    $limite_ultimo_acceso = $ultimo_acceso + 1800;

/*
Aquí realizo la comparación. Si el último acceso del usuario,
más media hora de gracia que le otorgo para mantenerle activa
la sesión, es mayor a la marca de hora actual, significa entonces
que su sesión puede seguir activa. Entonces, le actualizo la marca
de tiempo, renovándole la sesión
 */

    if ($limite_ultimo_acceso > time()) {
        $estado_activo = true;
        # actualizo la marca de tiempo renovando la sesión
        $$_SESSION['login-date'] = time();
    }
    return $estado_activo;
}

/* Finalmente, crearemos una pequeña función, que llame a la
anterior, y en caso de recibir como resultado que la sesión está
inactiva, desconectará al usuario del sistema. */
# Verificar sesión
function validar_sesion()
{
    if (!sessionActive()) {
        logout();
    }
/* Esta función, será la que invocaremos desde todas y
cada una de las páginas, a las cuales querramos
restringir su acceso. */
}

/*
La función que redirige a los usuarios
Como última función, crearemos aquella pendiente, de la cual
hemos hablado, que se encargará de redirigir a los usuarios a
otra página de nuestro sistema, utilizando la función header()
de PHP. */

# redirigir al usuario
function goto_page($pagina)
{
    header("Location: $pagina");
}
