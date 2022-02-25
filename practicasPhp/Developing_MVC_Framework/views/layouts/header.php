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
    <script src="./public/js/app.js"></script>
</head>

<body>
    <header class="container center header">

        <div class="item md-flex lg-jc-space-between">

            <div class="item i-b lg2" style="margin-top:1.8%;">
                <h1><a class="logo" style="text-decoration:none;" href="./">Mexflix</a></h1>
            </div>

            <nav class="item i-b v-middle ph12 lg10 lg-right menu">
                <ul class="container">
                    <?php if ($_SESSION['active']) { ?>
                        <li class="nobullet item inline v-middle"><a href="movieseries">Movie series</a></li>
                        <li class="nobullet item inline v-middle"><a href="users">Users</a></li>
                        <li class="nobullet item inline v-middle"><a href="status">Status</a></li>
                        <li class="nobullet item inline v-middle"><a href="profile">My profile</a></li>
                        <li class="nobullet item inline v-middle"><a href="salir">Logout</a></li>
                        
                        <div class="item i-b lg2">
                            <img src="./public/img/HTML-404-Error-Page.gif" width="300px" alt="My profile logo" class="v-middle">
                        </div>
                    <?php

                    } else {

                    ?>
                        <li class="nobullet item inline"><a href="signup">Signup</a></li>
                    <?php
                    }
                    ?>

                </ul>
            </nav>
            
        </div>


    </header>

    <main class="container main">