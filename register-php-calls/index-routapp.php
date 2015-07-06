<?php 
session_start();

$_SESSION['name']='user';

if (($_POST['email'])== null or ($_POST['password'])== null) { 


		$previousPage = $_SERVER["HTTP_REFERER"];
	    header('Location: '.$previousPage);	

		}

else if (isset($_POST['email']) and isset($_POST['password'])) {

	require_once('../conexion-php-calls/conexion-routapp.php');
	
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



<?php if ($_SESSION['user'] and $_SESSION['user']['userID']!=0)  {  ?>


	<script>
	window.setTimeout(function() {
	    window.location = '../rutas.php';
	  }, 5500);
	</script>
	<p align="center" style="margin-top:2cm; font-weight:bold; font-size:20px;">
		Bienvenido a Routapp! Le estamos dando a la página principal!
	<br>
	<img src="../images/carrera.png">
</p>


<?php




} else { ?>


		<form action="register-php-calls/index-routapp.php" method="post">

			<p class="header"><b>Rellene el siguiente para iniciar sesión</b></p>
 

						<input class="login-input" type="text" name="email" placeholder="Email">			
	
						<input class="login-input" type="password" name="password" placeholder="Contraseña">		

						<hr>	

					<p align="center">
				
						<input type="submit" class="hvr-glow" value="Login">

					</p>
	

		</form>

<?php } 

?>

