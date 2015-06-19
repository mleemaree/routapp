<!doctype html>
<html>
<head>
	<title>RouteApp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	
<div style="background-color:white; max-width:1200px; margin: 0 auto;">
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
<div class="container" id="profile-routes">	
	<div class="row" id="profile-box">
		<div class="col-xs-12" id="mis-rutas-profile">
			<?php include('profile-php-calls/mis-rutas.php') ?>
		</div>
		<div class="col-xs-12" id="estadisticas-profile">
			<?php include('profile-php-calls/estadisticas.php') ?>
		</div>
		<div class="col-xs-12" id="creditos-profile">
			<?php include('profile-php-calls/creditos.php') ?>
		</div>
		<div class="col-xs-12" id="informacion-profile">
			<?php include('profile-php-calls/informacion.php') ?>
		</div>
	</div>
</div>

</div>


<?php include ('php-calls/scripts.php'); ?>
</body>
</html>