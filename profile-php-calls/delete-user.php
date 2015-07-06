<?php

include('../conexion-php-calls/conexion-routapp.php');
session_start();
$_SESSION['name']='user';

$sql="SELECT * FROM users, routes, comments, exersice, zones WHERE username=".$_SESSION['user']['username'];
$delete = "DELETE FROM users, routes, comments, exersice, zones WHERE username=".$_SESSION['user']['username'];



if ($result = $conexion->query($sql)) {
	 $fila = $result->fetch_assoc();

	 ?>

	 <p class="success-delete">


	 <?php

	 		echo 'The user with the email: <b>'.$fila['email'].'</b> was succesfully deleted.';
	 ?>

	 <br><br>

	 <?php

	 		$msg='<a href="listado.php" class="success_message">See full list of users »</a>';

			echo $msg;

		$result->close();
} 



if ($result = $conexion->query($delete)) {
	$result->close();
}




?>