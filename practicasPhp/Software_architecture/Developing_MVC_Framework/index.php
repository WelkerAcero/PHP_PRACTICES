<?php
require_once('./Controllers/AutoLoad.php');

$route = isset($_GET['r']) ? $_GET['r'] : 'home'; 

$metflix = new Router($route);