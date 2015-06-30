<?php 
session_start();

$_SESSION['name']='user';

if (isset($_POST['email']) and isset($_POST['password'])) {

	require_once('conexion-routapp.php');
	
	$sql="SELECT * FROM users WHERE email='".$_POST['email']."';";
	
	if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc();
		if ($fila['password']!="" and $fila['password']==$_POST['password']) {
			$_SESSION['user']=$fila;
		} else {
			$_SESSION['user']=false;		
		}
		$result->close();
	}
	
} 

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <title> Logged in </title>

   <link rel="stylesheet" href="../css/ejercicio.css" type="text/css"/>
   <link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/gidole-regular" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="../css/hover.css"/>

</head>

<body>


<?php if ($_SESSION['user'] and $_SESSION['user']['userID']!=0)  { 

	?> 


	<?php 


} else { ?>


		<form action="register-php-calls/index-routapp.php" method="post">

			<p class="header"><b>Fill the following to login</b></p>

						<label for="email">Email</label>
						<input type="text" name="email">			
	
				
						<label for="password">Password</label>
						<input type="password" name="password">			
	
				
						<input type="submit" class="hvr-glow" value="Login">	
	

		</form>

<?php } 
header('Location: rutas.php');
?>



</body>
</html>

