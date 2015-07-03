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
</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	
<div style="background-color:white; max-width:1200px; margin: 0 auto; padding-top:2%;">

	<?php include('routes-php-calls/single-route-user.php');?>

</div><!--background-white-->

<?php include ('php-calls/scripts.php');
		include ('php-calls/footer.php');
	 ?>
<script type="text/javascript" src="js/perfil.js"></script>
</body>
</html>
