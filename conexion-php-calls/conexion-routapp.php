<?php

$database = "routapp"; 
$hostname = "localhost"; 
$username = "root";
$password = "root"; 
$conexion = new mysqli($hostname, $username, $password, $database);
$conexion->set_charset("utf8");

if ($conexion->connect_errno) {
    echo "Error al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	exit();
} 

?>