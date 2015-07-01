<?php
include('../conexion-php-calls/conexion-routapp.php');
session_start();
$_SESSION['name']='user';


if (($_POST['username'])== null or ($_POST['email'])== null or ($_POST['password'])== null) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);	

		} 

		else if (isset($_POST['username'])==true and isset($_POST['email'])==true and isset($_POST['password'])==true) {


			$sql = "INSERT INTO users (username, email, password) VALUES 
			('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."');";

			$conexion->query($sql);


			$_SESSION['user']['username']=$_POST['username'];
			$_SESSION['user']['email']=$_POST['email'];
			$_SESSION['user']['password']=$_POST['password'];
			$_SESSION['user']['userID']=$conexion->insert_id;


		} 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert Users</title>
</head>

<body>



<?php  

if (($_SESSION['user']['userID']) == 0) {

	?> 
	<script> alert ("Username or email already exists!"); window.location="../landing.php"; </script>
	<?php
}


else {
?>
<meta http-equiv="refresh" content="0;URL=../rutas.php" /> 
<?php
}

?>


</body>
</html>