<?php
include('../conexion-php-calls/conexion-routapp.php');

session_start();
$_SESSION['name']='route';
$_SESSION['name']='user';


if (($_POST['content'])== null or ($_POST['title'])==null) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);
			

		}

		else if (isset($_POST['content'])==true and isset($_POST['title'])==true) {

			// Protect against SQL injection
			$content = $conexion->escape_string($_POST['content']);
			$routeID = $conexion->escape_string($_SESSION['route']['routeID']);
			$username = $conexion->escape_string($_SESSION['user']['username']);
			$avatar = $conexion->escape_string($_SESSION['user']['avatar']);
			$title = $conexion->escape_string($_POST['title']);

			// Execute queries
			$conexion->query("SET foreign_key_checks=0");
			$conexion->query("INSERT INTO comments (content, routeID, username, avatar, title, date) VALUES ('$content', '17', '$username', '$avatar', '$title', now())");

			$_SESSION['route']['comments']=$_SESSION['route']['comments']+1;

			$conexion->query("UPDATE routes SET comments= '".$_SESSION['route']['comments']."' where routeID='17'");

} else { echo "Oops! Something went wrong...";
}

?>

<script> alert ("Gracias por su comentario!"); window.location="../ind-route-user.php?routeID=17"; </script>