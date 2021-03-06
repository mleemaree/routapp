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
	<link href="/stylesheets/ind-route-pro.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="/stylesheets/crear.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
<div class="crear-herramientas-wrapper">
	<ul class="crear-herramientas nav nav-pills nav-stacked" style="position:absolute; z-index:100;">
		<li class="button-large">
			<button type="button" class="herr-butt large">
				<img src="images/iconos/plus-white.png">
				<p class="herramienta-title">Herramientas</p>
			</button>
		</li>
		<li class="tool">
			<button id="lapiz" type="button" class="herr-butt">
				<img src="images/iconos/lapiz.png">
				<p class="herramienta-title">Añadir Trazo</p>
			</button>
		</li>
		<li class="tool">
			<button id="lapiz-zone" type="button" class="herr-butt">
				<img src="images/iconos/lapiz.png">
				<p class="herramienta-title">Añadir Zona</p>
			</button>
		</li>
		<li class="tool">
			<button class="delete herr-butt" id="deshacer" type="button">
				<img src="images/iconos/deshacer.png">
				<p class="herramienta-title">Deshacer</p>
			</button>
		</li>
		<li class="tool">
			<button class="delete herr-butt" id="borrar" type="button">
				<img src="images/iconos/trash.png">
				<p class="herramienta-title">Borrar todo</p>
			</button>
		</li>
		<li class="guardar-wrapper">
			<button id="guardar-crear-traz" type="button" class=" large herr-butt">
				<p class="guardar">Guardar Trazado</p>
			</button>
		</li>
	</ul>
</div>





<div class="container" id="crear-map-wrapper">


	<img alt="trazado" id="trazado" src="images/crear/trazo.png">
	<img alt="zone" id="zone" src="images/crear/zone.png">

	
	<?php include('creator-php-calls/crear-map.php');?>





</div><!--container crear-map-wrapper-->

<div class="container zones">
	<div class="row zoneNum">
		<div class="num-zones">
			<h4>ZONAS DE EJERCICIOS: <span id="num-zones">1</span></h4>
		</div>
	</div>

	<div style="background-color:white; padding-bottom:10%;">
		<div id="add-zone-wrapper" style="display:block;">
			<?php include ('creator-php-calls/add-zone.php'); ?>
		</div>
	</div>

</div>




<?php include ('php-calls/footer.php');
include ('php-calls/scripts.php'); 
?>
<script type="text/javascript" src="js/crear.js"></script>
<script>
$(window).load(function(){
    $('html, body').animate({scrollTop: $("#add-zone-wrapper").offset().top}, 800);
});
</script>

</body>
</html>