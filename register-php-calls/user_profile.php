<?php

//test

session_start();
$_SESSION['name']='user';
include('conexion-routapp.php');


$sql="SELECT * FROM users WHERE userID=".$_SESSION['user']['userID'];
$sql1="SELECT * FROM users WHERE username=".$_SESSION['user']['username'];


echo $sql;
echo $sql1;

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">

   <title> User Profile </title>

</head>

</head>

<body>


<h3>Información general de perfil</h3>

<form action="register_user_profile.php" method="post" enctype="multipart/form-data">

	<table>

		<?php 


		if ($result = $conexion->query($sql)) {
			$fila = $result->fetch_assoc();
		?>

		<tr>
			<td><label for="firstName">Nombre</label></td>
			<td><input type="text" name="firstName" value="<?php echo $fila['firstName'];?>"></td>
		</tr>
		<tr>
			<td><label for="username">Username</label></td>
			<td><input type="text" name="username" value="<?php echo $fila['username'];?>"></td>		
		</tr>
		<tr>
			<td><label for="lastName1">Apellido 1</label></td>
			<td><input type="text" name="lastName1" value="<?php echo $fila['lastName1'];?>"></td>		
		</tr>
		<tr>
			<td><label for="lastName2">Apellido 2</label></td>
			<td><input type="text" name="lastName2" value="<?php echo $fila['lastName2'];?>"></td>	
		</tr>
		<tr>
			<td><label for="birthday">Fecha de nacimiento</label></td>
			<td><input type="date" name="birthday" value="<?php echo $fila['birthday'];?>"> dd/mm/yyyy</td>	
		</tr>
		<tr>
			<td><label for="gender">Género</label></td>
			<td><select name="gender"> 
					<option value="<?php echo $fila['gender'];?>" selected="selected"><?php echo $fila['gender'];?></option>
					<option value="Masculino">Masculino</option> 
					<option value="Feminino">Feminino</option> 			
			</td>	
		</tr>
		<tr>
			<td><label for="height">Altura (cm)</label></td>
			<td><input type="text" name="height" value="<?php echo $fila['height'];?>"></td>
		</tr>
		<tr>
			<td><label for="weight">Peso (kg)</label></td>
			<td><input type="text" name="weight" value="<?php echo $fila['weight'];?>"></td>
		</tr>
		<tr>
			<td><label for="street">Calle</label></td>
			<td><input type="text" name="street" value="<?php echo $fila['street'];?>"></td>
		</tr>
		<tr>
			<td><label for="postalCode">Código Postal</label></td>
			<td><input type="text" name="postalCode" value="<?php echo $fila['postalCode'];?>"></td>
		</tr>
		<tr>
			<td><label for="city">Ciudad</label></td>
			<td><select name="city"> 
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
			</td>	
		</tr>
		<tr>
			<td><label for="avatar">Foto (avatar)</label></td>
			<td><input type="file" name="avatar"></td>		
		</tr>

	</table>


 <h3>Preferencias deportivas</h3>
	<table>

		<tr>
			<td><label for="sportLevel">Nivel Deportivo</label></td>
			<td><select name="sportLevel"> 
					<option value="<?php echo $fila['sportLevel'];?>" selected="selected"><?php echo $fila['sportLevel'];?></option>
					<option value="Principiante">Principiante</option> 
					<option value="Intermedio">Intermedio</option> 	
					<option value="Avanzado">Avanzado</option> 			
			</td>	
		</tr>   
		<tr>
			<td><label for="motivation">¿Motivación para hacer deporte?</label></td>
			<td><textarea name="motivation"><?php echo $fila['motivation'];?></textarea></td>		
		</tr>
		<tr>
			<td><label for="goals">¿Cuáles son tus metas?</label></td>
			<td><textarea name="goals"><?php echo $fila['goals'];?></textarea></td>		
		</tr>

	</table>

 <h3>Email y Contraseñas</h3>
	<table>

		<tr>
			<td><label for="email">Cambiar email</label></td>
			<td><input type="text" name="email" size="30" value="<?php echo $fila['email'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['email'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['email'];?>') {this.value = '';}" 
			 		   placeholder="introduce el nuevo email"></td>	
		</tr>
		<tr>
			<td><label for="password">Cambiar contraseña</label></td>
			<td><input type="password" name="password" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="entrar nueva contraseña"></td>
			<td><input type="password" name="password2" size="30" value="<?php echo $fila['password'];?>"
					   onblur="if (this.value == '') {this.value = '<?php echo $fila['password'];?>';}"
			 		   onfocus="if (this.value == '<?php echo $fila['password'];?>') {this.value = '';}"
			 		   placeholder="confirmar nueva contraseña"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Guardar"></td>	
		</tr>		
	</table>

</form>





<?php    
	$result->close();
} 
?>


</body>
</html>
