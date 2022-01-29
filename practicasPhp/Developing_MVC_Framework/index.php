<?php
require_once('Controllers/AutoLoad.php');

$autoLoad = new AutoLoad();//This going to load all the classes needed

$route = isset($_GET['r']) ? $_GET['r'] : 'home'; 
$metflix = new Router($route);