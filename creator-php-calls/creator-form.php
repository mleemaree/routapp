<?php
session_start();
$_SESSION['name']='route';

echo $_SESSION['user']['avatar'];

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">

   <title> Register Page </title>

</head>

</head>

<body>

<form action="route-register.php" method="post" enctype="multipart/form-data">

<ul>
	<li>
		<label for="title">Nombre</label>
		<input type="text" name="title">
	</li>
	<li>
		<label for="description">Descripción</label>
		<textarea name="description"></textarea>
	</li>
</ul>


<label for="trazando">Trazando de la Ruta:  </label>
Circular <input type="radio" name="trazando" value="Circular">
Lineal <input type="radio" name="trazando" value="Lineal">

<ul class="characteristics">
	<li>
		<h4>Tipo de ejercicio</h4>
		<ul>
			<li>Resistencia <input type="checkbox" name="exercType[]" value="Resistencia"></li>
			<li>Velocidad <input type="checkbox" name="exercType[]" value="Velocidad"></li>
			<li>Potencia <input type="checkbox" name="exercType[]" value="Potencia"></li>
			<li>Elasticidad <input type="checkbox" name="exercType[]" value="Elasticidad"></li>
			<li>Musculación <input type="checkbox" name="exercType[]" value="Musculación"></li>
			<li>Agilidad <input type="checkbox" name="exercType[]" value="Agilidad"></li>
			<li>Equilibrio <input type="checkbox" name="exercType[]" value="Equilibrio"></li>
		</ul>
	</li>
	<li>
		<h4>Zona a Ejercitar</h4>
		<ul>
			<li>Piernas <input type="checkbox" name="exercZones[]" value="Piernas"></li>
			<li>Brazos <input type="checkbox" name="exercZones[]" value="Brazos"></li>
			<li>Potencia <input type="checkbox" name="exercZones[]" value="Espalda"></li>
			<li>Torso <input type="checkbox" name="exercZones[]" value="Torso"></li>
			<li>Abdominales <input type="checkbox" name="exercZones[]" value="Abdominales"></li>
			<li>Hombros <input type="checkbox" name="exercZones[]" value="Hombros"></li>
		</ul>
	</li>
	<li>
		<h4>Material adicional</h4>
		<ul>
			<li>TRX <input type="checkbox" name="material[]" value="TRX"></li>
			<li>Balón de pilates <input type="checkbox" name="material[]" value="Balón de pilates"></li>
			<li>Kettleball <input type="checkbox" name="material[]" value="Kettleball"></li>
			<li>Teraband <input type="checkbox" name="material[]" value="Teraband"></li>
			<li>Esterillas <input type="checkbox" name="material[]" value="Esterillas"></li>
			<li>Pesas de pies <input type="checkbox" name="material[]" value="Pesas de pies"></li>
		</ul>
	</li>
	<li>
		<h4>Información adicional</h4>
		<ul>
			<li>Fuentes potables <input type="checkbox" name="other[]" value="Fuentes potables"></li>
			<li>Transporte público <input type="checkbox" name="other[]" value="Transporte público"></li>
			<li>Parques <input type="checkbox" name="other[]" value="Parques"></li>
			<li>Zona iluminada <input type="checkbox" name="other[]" value="Zona iluminada"></li>
			<li>Esterillas <input type="checkbox" name="other[]" value="Esterillas"></li>
			<li>Sin tráfico <input type="checkbox" name="other[]" value="Sin tráfico"></li>
			<li>Tierra <input type="checkbox" name="other[]" value="Tierra"></li>
			<li>Asfalto <input type="checkbox" name="other[]" value="Asfalto"></li>
		</ul>
	</li>
</ul>

<input type="submit" value="Guardar">

</form>



</body>
</html>

