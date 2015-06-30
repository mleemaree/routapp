<?php
session_start();
$_SESSION['name']='user';
include('conexion-php-calls/conexion-routapp.php');
?>

<!doctype html>
<html>
<head>
	<title>RouteApp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
</head>
<body>
<?php include('php-calls/top-menu.php') ?>



<?php include ('php-calls/scripts.php'); ?>
</body>
</html>