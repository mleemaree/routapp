<?php
session_start();
$_SESSION['name']='route';

include('../conexion-php-calls/conexion-routapp.php');


if (($_POST['exName'])== null  or ($_POST['descriptionEx'])==null or ($_POST['repetition'])== null 
	or ($_POST['series'])== null or ($_POST['rest'])== null ) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);

			

		}

		else if (isset($_POST['exName'])==true and isset($_POST['descriptionEx'])==true and isset($_POST['repetition'])==true 
					and isset($_POST['series'])==true and isset($_POST['rest'])==true ) {

			// Protect against SQL injection
			$exName = $conexion->escape_string($_POST['exName']);
			$descriptionEx = $conexion->escape_string($_POST['descriptionEx']);
			$repetition = $conexion->escape_string($_POST['repetition']);
			$series = $conexion->escape_string($_POST['series']);
			$rest = $conexion->escape_string($_POST['rest']);

			// Execute queries
			$conexion->query("SET foreign_key_checks=0");
			$conexion->query("INSERT INTO exercise (exName, descriptionEx, repetition, series, rest) 
							VALUES ('$exName', '$descriptionEx', '$repetition', '$series', '$rest')");


} else { echo "Oops! Something went wrong...";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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