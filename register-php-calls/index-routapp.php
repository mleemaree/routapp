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


	<?php include('routes.php');


} else { ?>

<div id="login"> 

	<div id="mydiv">

		<form action="index-routapp.php" method="post">

			<p class="header"><b>Fill the following to login</b></p>

				<table id="sample">

					<tr>
						<td><label for="email">Email</label></td>
						<td><input type="text" name="email"></td>			
				</tr>
				<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="password"></td>			
				</tr>
				<tr>
						<td></td><td><input type="submit" class="hvr-glow" value="Login"></td>	
				</tr>

		</form>

<?php } ?>

	</div>

</div>

</body>
</html>

