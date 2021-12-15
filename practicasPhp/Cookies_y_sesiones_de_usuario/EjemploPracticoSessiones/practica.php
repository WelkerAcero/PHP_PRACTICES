<?php

$user = "pepegrillo";
$pass = "_italia1975_";
$$user = hash("sha256",$user);
$$pass = hash("sha256",$pass);
echo $$user,"\n";
echo $$pass,"\n";

//85ce93e9490c0fe6a6431f45c8837de8

?>