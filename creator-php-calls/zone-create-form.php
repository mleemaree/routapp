<?php
include('../conexion-php-calls/conexion-routapp.php');
session_start();
$_SESSION['name']='route';

$sql="SELECT * FROM routes WHERE routeID=".$_SESSION['route']['routeID'];

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">

</head>

</head>

<body>

<form action="zone-register.php" method="post" enctype="multipart/form-data">

<ul>
	<li>
		<label for="exName">Nombre del Ejercicio</label>
		<input type="text" name="exName">
	</li>
	<li>
		<label for="descriptionEx">Descripción</label>
		<textarea name="descriptionEx"></textarea>
	</li>
	<li>
		<label for="repetition">Repeticiónes</label>
		<input type="text" name="repetition">
	</li>
		<li>
		<label for="series">Series</label>
		<input type="text" name="series">
	</li>
		<li>
		<label for="rest">Descanso</label>
		<input type="text" name="rest">
	</li>

</ul>


<input type="submit" value="Guardar">

</form>



</body>
</html>

