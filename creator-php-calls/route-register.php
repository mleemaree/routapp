<?php
session_start();
$_SESSION['name']='route';

include('../conexion-php-calls/conexion-routapp.php');

$exercType = implode(", ",$_POST["exercType"]);
$exercZones = implode(", ",$_POST["exercZones"]);
$material = implode(", ",$_POST["material"]);
$other = implode(", ",$_POST["other"]);


if (($_POST['title'])== null  or ($_POST['description'])==null or ($_POST['trazando'])== null 
	or ($exercType)== null or ($exercZones)== null or ($material)== null or ($other)== null) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);

			

		}

		else if (isset($_POST['title'])==true and isset($_POST['description'])==true and isset($_POST['trazando'])==true 
					and isset($exercType)==true and isset($exercZones)==true and isset($material)==true 
					and isset($other)==true) {

			// Protect against SQL injection
			$title = $conexion->escape_string($_POST['title']);
			$description = $conexion->escape_string($_POST['description']);
			$trazando = $conexion->escape_string($_POST['trazando']);
			$exercType_array = $conexion->escape_string($exercType);
			$exercZones_array = $conexion->escape_string($exercZones);
			$material_array = $conexion->escape_string($material);
			$other_array = $conexion->escape_string($other);

			// Execute queries
			$conexion->query("SET foreign_key_checks=0");
			$conexion->query("INSERT INTO routes (title, description, trazando, exercType, exercZones, material, other, avatar, username) 
							VALUES ('$title', '$description', '$trazando', '$exercType_array', '$exercZones_array', '$material_array', '$other_array', '".$_SESSION['user']['avatar']."', '".$_SESSION['user']['username']."')");

			$_SESSION['route']['routeID']=$conexion->insert_id;


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


<?php echo $_SESSION['route']['routeID'];?>




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