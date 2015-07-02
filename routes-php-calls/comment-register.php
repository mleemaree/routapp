<?php
include('conexion-routapp.php');

session_start();
$_SESSION['name']='route';
$_SESSION['name']='user';


echo $_SESSION['user']['username'];
echo $_SESSION['user']['avatar'];


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

} else { echo "Oops! Something went wrong...";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert routes</title>
</head>

<body>




<p>Success!!!</p>

	<?php $msg='<a href="user_profile.php" class="success_message">User Profile »</a>';

	echo $msg; ?>
<br>
	<?php

	$msg='<a href="route-form.php" class="success_message">Add another route »</a>';

	echo $msg; 

	?>


</body>
</html>