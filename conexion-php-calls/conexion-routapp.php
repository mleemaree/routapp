<?php

$database = "db457893_6"; 
$hostname = "mysql5.colortwister.abcde.biz"; 
$username = "db457893_6";
$password = "Routapp2015!"; 
$conexion = new mysqli($hostname, $username, $password, $database);
$conexion->set_charset("utf8");

if ($conexion->connect_errno) {
    echo "Error al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
	exit();
} 

?>