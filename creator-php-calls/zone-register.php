<?php
session_start();
$_SESSION['name']='route';
$_SESSION['name']='zone';

include('../conexion-php-calls/conexion-routapp.php');



if (($_POST['exName'])== null  or ($_POST['descriptionEx'])==null or ($_POST['repetition'])== null 
	or ($_POST['series'])== null or ($_POST['rest'])== null or ($_POST['exercType'])== null ) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);

			

		}

		else if (isset($_POST['exName'])==true and isset($_POST['descriptionEx'])==true and isset($_POST['repetition'])==true 
					and isset($_POST['series'])==true and isset($_POST['rest'])==true and isset($_POST['exercType'])==true ) {

			// Protect against SQL injection
			$exName = $conexion->escape_string($_POST['exName']);
			$descriptionEx = $conexion->escape_string($_POST['descriptionEx']);
			$repetition = $conexion->escape_string($_POST['repetition']);
			$series = $conexion->escape_string($_POST['series']);
			$rest = $conexion->escape_string($_POST['rest']);
			$exercType = $conexion->escape_string($_POST['exercType']);

			// Execute queries
			$conexion->query("SET foreign_key_checks=0");
			$conexion->query("INSERT INTO exercise (exName, descriptionEx, exercType, repetition, series, rest, zoneNum, routeID) 
							VALUES ('$exName', '$descriptionEx', '$exercType', '$repetition', '$series', '$rest', '1', '".$_SESSION['route']['routeID']."')");
		
			$conexion->query("INSERT INTO zones (km, zoneNum, routeID, exercType) 
							VALUES ('3,1', '1', '".$_SESSION['route']['routeID']."', '".$_SESSION['zone']['exercType']."')");


} else { echo "Oops! Something went wrong...";
}

?>

<script> alert ("SUCCESS!"); window.location="../ind-route-user.php?routeID=<?php echo $_SESSION['route']['routeID']?>"; </script>



