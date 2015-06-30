<?php

$sql="SELECT * FROM users WHERE userID=".$_SESSION['user']['userID'];
$sql1="SELECT * FROM users WHERE username=".$_SESSION['user']['username'];


echo $sql;
//echo $sql1;

?>
<h3>Información general de perfil</h3>

<form action="../register-php-calls/register_user_profile.php" method="post" enctype="multipart/form-data">


		<?php 


		if ($result = $conexion->query($sql)) {
			$fila = $result->fetch_assoc();
		?>

		
			<label for="firstName">Nombre</label>
			<input type="text" name="firstName" value="<?php echo $fila['firstName'];?>">
		
		
			<label for="username">Username</label>
			<input type="text" name="username" value="<?php echo $fila['username'];?>">		
		
		
			<label for="lastName1">Apellido 1</label>
			<input type="text" name="lastName1" value="<?php echo $fila['lastName1'];?>">		
		
		
			<label for="lastName2">Apellido 2</label>
			<input type="text" name="lastName2" value="<?php echo $fila['lastName2'];?>">	
		
		
			<label for="birthday">Fecha de nacimiento</label>
			<input type="date" name="birthday" value="<?php echo $fila['birthday'];?>"> dd/mm/yyyy	
		
		
			<label for="gender">Género</label>
			<select name="gender"> 
					<option value="<?php echo $fila['gender'];?>" selected="selected"><?php echo $fila['gender'];?></option>
					<option value="Masculino">Masculino</option> 
					<option value="Feminino">Feminino</option> 			
				
		
		
			<label for="height">Altura (cm)</label>
			<input type="text" name="height" value="<?php echo $fila['height'];?>">
		
		
			<label for="weight">Peso (kg)</label>
			<input type="text" name="weight" value="<?php echo $fila['weight'];?>">
		
		
			<label for="street">Calle</label>
			<input type="text" name="street" value="<?php echo $fila['street'];?>">
		
		
			<label for="postalCode">Código Postal</label>
			<input type="text" name="postalCode" value="<?php echo $fila['postalCode'];?>">
		
		
			<label for="city">Ciudad</label>
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
				
		
		
			<label for="avatar">Foto (avatar)</label>
			<input type="file" name="avatar">		
		


 <h3>Preferencias deportivas</h3>

		
			<label for="sportLevel">Nivel Deportivo</label>
			<select name="sportLevel"> 
					<option value="<?php echo $fila['sportLevel'];?>" selected="selected"><?php echo $fila['sportLevel'];?></option>
					<option value="Principiante">Principiante</option> 
					<option value="Intermedio">Intermedio</option> 	
					<option value="Avanzado">Avanzado</option> 			
				
		   
		
			<label for="motivation">¿Motivación para hacer deporte?</label>
			<textarea name="motivation"><?php echo $fila['motivation'];?></textarea>		
		
		
			<label for="goals">¿Cuáles son tus metas?</label>
			<textarea name="goals"><?php echo $fila['goals'];?></textarea>		
		


 <h3>Email y Contraseñas</h3>

		
			<label for="email">Cambiar email</label>
			<input type="text" name="email" size="30" value="<?php echo $fila['email'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['email'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['email'];?>') {this.value = '';}" 
			 		   placeholder="introduce el nuevo email">	
		
		
			<label for="password">Cambiar contraseña</label>
			<input type="password" name="password" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="entrar nueva contraseña">
			<input type="password" name="password2" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="confirmar nueva contraseña">
		
		
			<input type="submit" value="Guardar">	
				

</form>





<?php    
	$result->close();
} 
?>

