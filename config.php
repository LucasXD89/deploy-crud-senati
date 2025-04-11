<?php
$host ="localhost";
$user ="root";
$password ="";
$db ="senati";
$port = "3306";

$conexion = new mysqli($host, $user, $password, $db, $port);

if($conexion->connect_error) {
    die("Connection failed!". $conexion->connect_error);
}

?>