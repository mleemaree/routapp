<?php

$sql="SELECT * FROM users WHERE userID=".$_SESSION['user']['userID'];
$sql1="SELECT * FROM users WHERE username=".$_SESSION['user']['username'];


?>

	<div class="row info-title-wrapper">
		<h2 class="info-title">INFORMACIÓN</h2>
	</div>
	<div class="container general" id="info-adjusts">
		<div class="row">
			<h3 class="info-gen-title">Información General de Perfil</h3>
		</div>

	<form action="../register-php-calls/register_user_profile.php" method="post" enctype="multipart/form-data">


		<?php 


		if ($result = $conexion->query($sql)) {
			$fila = $result->fetch_assoc();
		?>

		<div class="row labels">
			<div class="col-xs-4">
				<label for="firstName">Nombre</label>
			</div>
			<div class="col-xs-4">
				<label for="username">Username</label>
			</div>
			<div class="col-xs-4"></div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<input type="text" name="firstName" value="<?php echo $fila['firstName'];?>">
			</div>
			<div class="col-xs-4">
				<input type="text" name="username" value="<?php echo $fila['username'];?>">
			</div>
			<div class="col-xs-4"></div>
		</div>
		<div class="row labels">
			<div class="col-xs-6">
				<label for="lastName1">Apellido 1</label>
			</div>
			<div class="col-xs-6">
				<label for="lastName2">Apellido 2</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<input type="text" name="lastName1" value="<?php echo $fila['lastName1'];?>">
			</div>
			<div class="col-xs-6">
				<input type="text" name="lastName2" value="<?php echo $fila['lastName2'];?>">
			</div>
		</div>
		<div class="row labels">
			<div class="col-xs-4">
				<label for="birthday">Fecha de nacimiento</label>
			</div>
			<div class="col-xs-4">
				<label for="gender">Género</label>
			</div>
			<div class="col-xs-2">
				<label for="height">Altura (cm)</label>
			</div>
			<div class="col-xs-2">
				<label for="weight">Peso (kg)</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<input type="date" name="birthday" value="<?php echo $fila['birthday'];?>">
			</div>
			<div class="col-xs-4">
				<select name="gender"> 
					<option value="<?php echo $fila['gender'];?>" selected="selected"><?php echo $fila['gender'];?></option>
					<option value="Masculino">Masculino</option> 
					<option value="Feminino">Feminino</option> 
				</select>
			</div>
			<div class="col-xs-2">
				<input type="text" name="height" value="<?php echo $fila['height'];?>">
			</div>
			<div class="col-xs-2">
				<input type="text" name="weight" value="<?php echo $fila['weight'];?>">
			</div>
		</div>
		<div class="row labels">
			<div class="col-xs-6">
				<label for="street">Calle</label>
			</div>
			<div class="col-xs-2">
				<label for="postalCode">Código Postal</label>
			</div>
			<div class="col-xs-4">
				<label for="city">Ciudad</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<input type="text" name="street" value="<?php echo $fila['street'];?>">
			</div>
			<div class="col-xs-2">
				<input type="text" name="postalCode" value="<?php echo $fila['postalCode'];?>">
			</div>
			<div class="col-xs-4">
				<select name="city"> 
					<option value="<?php echo $fila['city'];?>" selected="selected"><?php echo $fila['city'];?></option>
					<option value="Madrid">Madrid</option>
					<option value="Barcelona">Barcelona</option> 
					<option value="Valencia">Valencia</option>
					<option value="Sevilla">Sevilla</option>
					<option value="Zaragoza">Zaragoza</option>
					<option value="Malaga">Málaga</option>
					<option value="Murcia">Murcia</option>
					<option value="Palma de Mallorca">Palma de Mallorca</option>
					<option value="Las Palmas de Gran Canaria">Las Palmas de Gran Canaria</option>
					<option value="Bilbao">Bilbao</option>
				</select>
			</div>
		</div>
	</div>
<hr>

	<div class="container pref-dep">
		<div class="row">
			<div class="col-xs-12" style="padding:0;">
				<h3 class="info-gen-title">Preferencias deportivas</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 pref-labels">
				<label for="sportLevel">Nivel Deportivo</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<select id="sportLevel" name="sportLevel"> 
					<option value="<?php echo $fila['sportLevel'];?>" selected="selected"><?php echo $fila['sportLevel'];?></option>
					<option value="Principiante">Principiante</option> 
					<option value="Intermedio">Intermedio</option> 	
					<option value="Avanzado">Avanzado</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 pref-labels">
				<label for="motivation">¿Motivación para hacer deporte?</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<textarea name="motivation"><?php echo $fila['motivation'];?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 pref-labels">
				<label for="goals">¿Cuáles son tus metas?</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<textarea name="goals"><?php echo $fila['goals'];?></textarea>
			</div>
		</div>
		<div class="row">
		</div>
	</div>

<hr>


	<div class="container email-contrasena">
		<div class="row">
			<h3 class="info-gen-title">Email y Contraseñas</h3>
		</div>
		<div class="row pref-labels">
			<label for="email">Cambiar email</label>
		</div>
		<div class="row">
			<input class="email-input" type="text" name="email" size="30" value="<?php echo $fila['email'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['email'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['email'];?>') {this.value = '';}" 
			 		   placeholder="introduce el nuevo email">
		</div>
		<div class="row pref-labels">
			<label for="password">Cambiar contraseña</label>
		</div>
		<div class="row">
			<input class="email-input" type="password" name="password" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="entrar nueva contraseña">
		</div>
		<div class="row">
			<input class="email-input" type="password" name="password2" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="confirmar nueva contraseña">
		</div>
		<label for="avatar">Foto (avatar)</label></td>
			<td><input type="file" name="avatar">
		<div class="row">
			<input class="email-button" type="submit" value="Guardar">			
		</div>
				
		   
		
		
		


 
		
			
				

</form>





<?php    
	$result->close();
} 
?>

