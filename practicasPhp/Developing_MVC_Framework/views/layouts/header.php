<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenid@s a Mexflix, tus películas favoritas">
    <title>Mexflix login</title>
    <link rel="shortcut icon" href="./public/img/M-Mexflix.png" type="image/png">
    <!-- Using a libreria criollita del man -->
    <link rel="stylesheet" href="./public/css/responsimple.min.css">
    <link rel="stylesheet" href="./public/css/mexflix.css">
    <script src="./librerias/jquery-3.6.0.min.js"></script>

</head>

<body>
    <header class="container center header">

        <div class="item i-b v-middle ph12 lg2">
            <h1><a class="logo" style="text-decoration:none" href="login">Mexflix</a></h1>
        </div>

        <nav class="item i-b v middle ph12 lg10 lg-right menu">
            <ul class="container">
                <?php if ($_SESSION['active']) { ?>
                    <li class="nobullet item inline"><a href="movieseries">Movie series</a></li>
                    <li class="nobullet item inline"><a href="users">Users</a></li>
                    <li class="nobullet item inline"><a href="status">Status</a></li>
                    <li class="nobullet item inline"><a href="profile">My profile</a></li>
                    <li class="nobullet item inline"><a href="salir">Logout</a></li>

                <?php

                } else {

                ?>
                    <li class="nobullet item inline"><a href="signup">Signup</a></li>
                <?php
                }
                ?>

            </ul>
        </nav>
    </header>

    <main class="container main">