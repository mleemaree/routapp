<?php
session_start();
$_SESSION['name']='user';
include('conexion-php-calls/conexion-routapp.php');
?>

<!doctype html>
<html>
<head>
	<title>Routapp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/crear.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
<div class="crear-herramientas-wrapper">
	<ul class="crear-herramientas" style="position:absolute;">
		<li class="button-large">
			<button type="button">
				<img src="images/iconos/plus-white.png">
				<p class="herramienta-title">Herramientas</p>
			</button>
		</li>
		<li class="tool">
			<button type="button">
				<img src="images/iconos/lapiz.png">
				<p class="herramienta-title">Añadir Trazo</p>
			</button>
		</li>
		<li class="tool">
			<button type="button">
				<img src="images/iconos/deshacer">
				<p class="herramienta-title">Deshacer</p>
			</button>
		</li>
		<li class="tool">
			<button type="button">
				<img src="images/iconos/trash.png">
				<p class="herramienta-title">Borrar todo</p>
			</button>
		</li>
		<li class="guardar-wrapper">
			<button type="button">
				<p class="guardar">Guardar Trazado</p>
			</button>
		</li>
	</ul>
</div>





<div class="container" id="crear-map-wrapper">
	<?php include('creator/crear-map.php');?>
</div>



<?php include ('php-calls/scripts.php'); 
		include ('php-calls/footer.php');
?>
</body>
</html>