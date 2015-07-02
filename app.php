<!doctype html>
<html>
<head>
	<title>Routapp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/landing.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container-fluid nav-wrapper">
			<?php include('landing-php-calls/top-nav.php');?>
	</div>
	<div class="container-fluid app">
		<div class="row" style="padding-top:11%;">
			<div class="hidden-xs col-sm-6"></div>
			<div class="col-xs-12 col-sm-6" style="padding-right:0; float:right;">
				<div id="app-title">
					<h2 class="title-app">¡DESCÁRGATE GRATIS NUESTRA APLICACIÓN!</h2>
				</div>
				<h4 class="subtitle-app">Con nuestra aplicación sacarás el máximo rendimiento a todas nuestras rutas.</h4>
				<ul class="app-puntos">
					<li>Sigue y crea rutas a través de la localización GPS</li>
					<li>Crea zonas y nuevos ejercicios desde cualquier lugar</li>
					<li>Monitoriza todas tus estadisticas en tiempo real</li>
					<li>Explora y encuentra lugares donde ponerte en forma</li>
					<li>...Y otras muchas más funciones. ¡Descúbrelas!</li>
				</ul>
				<p class="descarga-app">Descárgala desde:</p>
				<div class="tiendas">
					<img style="padding-right:6%;"src="images/google.png">
					<img src="images/itunes.png">
				</div>
			</div>
		</div>
	</div>








	<?php include ('php-calls/scripts.php'); ?>
<script type="text/javascript" src="js/mis-rutas.js"></script>
</body>
</html>