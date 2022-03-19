<?php

class Router
{
    public $route;

    public function __construct($route)
    {

        $session_options = array(
            'use_only_cookies' => 1,
            'read_and_close' => false,
        );

        if (!isset($_SESSION))  session_start($session_options);

        if (!isset($_SESSION['active']))  $_SESSION['active'] = false;

        //this will manage the part of our webApp going to show
        //If we are already authenticated or not.

        if ($_SESSION['active']) {
            //Here goes all our webApp programming
            $this->route = isset($_GET['r']) ? $_GET['r'] : 'home';
            $controller = new ViewController();

            switch ($this->route) {

                case 'home':

                    $controller->load_view('home');
                    break;

                case 'movieseries':

                    $controller->load_view('movieseries');
                    break;

                case 'users':

                    $controller->load_view('users');
                    break;

                case 'status':

                    if (!isset($_POST['r'])) $controller->load_view('status');
                    elseif ($_POST['r'] == 'status_add') $controller->load_view('status_add');
                    elseif ($_POST['r'] == 'status_edit') $controller->load_view('status_edit');
                    elseif ($_POST['r'] == 'status_delete') $controller->load_view('status_delete');

                    break;

                case 'profile':

                    $controller->load_view('profile');

                    if (isset($_POST['r']) && $_POST['r'] == 'verification') {

                        $controller->load_view('verification');
                    }

                    if (isset($_POST['r']) && $_POST['r'] == 'editProfile') {

                        if (md5($_POST['current_password']) == $_SESSION['pass']) {
                            $controller->load_view('editProfile');
                            $_SESSION['passVerified'] = true;
                        } else {
                            print('
                                <div class="container" style="text-align:center">
                                    <h2 class="item add" style="background-color:yellow; color:black;">
                                        Wrong password!
                                    </h2>
                                </div>
                                <script>
                                    window.onload = function(){
                                        reloadPage("profile");
                                    }
                                </script>
                            ');
                        }
                    }

                    if (isset($_POST['edit_user']) && isset($_POST['edit_name']) && isset($_POST['edit_email']) && isset($_POST['edit_birthday']) && isset($_POST['edit_pass']) && isset($_POST['edit_role'])) {

                        $user_data = array(
                            'user' => $_POST['edit_user'],
                            'email' => $_POST['edit_email'],
                            'name' => $_POST['edit_name'],
                            'birthday' => $_POST['edit_birthday'],
                            'pass' => $_POST['edit_pass'],
                            'role' => $_POST['edit_role'],
                        );


                        $session = new SessionController();
                        $session->set($user_data);

                        print('
                        <script>
                            alert("Data edited successfully");
                        </script>'
                        );
                    }

                    break;

                case 'salir':

                    $user_session = new SessionController();
                    $session = $user_session->logout();
                    break;

                default:
                    $controller->load_view('error404');
                    break;
            }
        } else {


            if (!isset($_POST['user']) && !isset($_POST['pass'])) {

                if ($route == 'signup') {

                    $signup = new ViewController();
                    $signup->load_view('signup');

                    if (!empty($_POST['user_signup']) && !empty($_POST['password_signup']) && !empty($_POST['email_signup']) && !empty($_POST['name_signup']) && !empty($_POST['birthday_signup']) && !empty($_POST['role_signup'])) {

                        $user_data = array(
                            "user" => $_POST['user_signup'],
                            "email" => $_POST['email_signup'],
                            "name" => $_POST['name_signup'],
                            "birthday" => $_POST['birthday_signup'],
                            "pass" => $_POST['password_signup'],
                            "role" => $_POST['role_signup']
                        );

                        $user_session = new SessionController();
                        $user_session->signup($user_data);

                        print('
                        <script>
                            alert("User successfully created.");
                            window.onload = function(){
                                reloadPage("login");
                            }
                        </script>
                        ');
                    }
                } else {

                    $login_form = new ViewController();
                    $login_form->load_view('login');
                }

            } else {

                $user_session = new SessionController();
                $session = $user_session->login($_POST['user'], $_POST['pass']);

                if (empty($session)) {
                    /* echo 'El usuario y el password son incorrectos'; */
                    $controller = new ViewController();
                    $controller->load_view('login');
                    header('Location: ./?error=El usuario ' . $_POST['user'] . ' o el password no coinciden');
                } else {

                    foreach ($session as $row) {
                        $_SESSION['user'] = $row['user'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['birthday'] = $row['birthday'];
                        $_SESSION['pass'] = $row['pass'];
                        $_SESSION['role'] = $row['role'];
                    }

                    /* echo 'El usuario y el password son incorrectos'; */
                    $_SESSION['active'] = true;

                    header('Location: ./');
                }
            }
        }
    }

    public function __destruct()
    {
    }
}
