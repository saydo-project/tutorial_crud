<?php

$hostname ="localhost";//server host dari database kita
$username ="root";//username untuk login
$password ="";//password untuk login
$database ="himatika";//nama database

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("can't connect to database");
}
?>
