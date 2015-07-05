<?php
session_start();
$_SESSION['name']='user';
include('conexion-php-calls/conexion-routapp.php');

$sql="SELECT * FROM users WHERE username=".$_SESSION['user']['username'];

?>

<!doctype html>
<html>
<head>
	<title>Routapp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	
<div style="background-color:white; max-width:1200px; margin: 0 auto;">
	<div class="container">
		<div class="row no-before">
			<div class="col-xs-12" style="padding:0;"id="profile-background">
				<div class="user-info-top">
					<img class="logged-user-image" src="register-php-calls/user_images/<?php echo $_SESSION['user']['avatar']; ?>">
					<h2 class="user-name"><?php echo $_SESSION['user']['username'];?></h2>
				</div>
				<img id="bkg-img-perf" style="width:100%; z-index:0; height:420px;" alt="profile background image" src="register-php-calls/user_images/<?php echo $_SESSION['user']['coverPhoto']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" style="padding:0;">
				<ul class="profile-menu nav nav-tabs nav-justified" style="padding:0; z-index:5; background-color:white;">
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
			<?php include('profile-php-calls/user_profile.php') ?>
		</div>
	</div>
</div>

</div>


<?php include ('php-calls/scripts.php');
		include ('php-calls/footer.php');
 ?>
<script type="text/javascript" src="js/perfil.js"></script>
</body>
</html>