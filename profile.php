<!doctype html>
<html>
<head>
	<title>RouteApp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	

	<div class="container">
		<div class="row">
			<div class="col-xs-12" id="profile-background">
				<img class="logged-user-image" src="images/alejandro-large.png">
				<h2 class="user-name">Alejandro</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" style="padding:0;">
				<ul class="profile-menu" style="padding:0;">
					<li class="active profile-menu-option" id="mis-rutas"><span>Mis Rutas</span></li>
					<li class="profile-menu-option" id="estadisticas"><span>Estadísticas</span></li>
					<li class="profile-menu-option" id="creditos"><span>Créditos</span></li>
					<li class="profile-menu-option" id="informacion"><span>Informacíon y Ajustes</span></li>
				</ul>
			</div>
		</div>
	</div><!--container-->
	<div class="container" id="my-routes">
		<div class="row">
			<div id="ruta-map">
				<img class="img-responsive" id="route-map" src="images/trazado.png">
			</div>
		</div>





	</div>



<?php include ('php-calls/scripts.php'); ?>
</body>
</html>