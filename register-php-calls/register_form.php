<?php
include('conexion-routapp.php');
session_start();
$_SESSION['name']='user';

?>



	<div id="unete-form">

<form action="register-php-calls/register_routapp.php" method="post" enctype="multipart/form-data">



		
			<input class="unete-input" type="text" name="username" placeholder="Nombre">	

			<input class="unete-input" type="text" name="email" placeholder="Cuenta de correo">
		
			<input class="unete-input" type="password" name="password" placeholder="Contraseña">
	
		
</form>

</div>

