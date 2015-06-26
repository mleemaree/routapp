<?php
include('conexion-routapp.php');
session_start();
$_SESSION['name']='user';

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">

   <title> Register Page </title>

</head>

</head>

<body>

<form action="register_routapp.php" method="post" enctype="multipart/form-data">


	<table id="sample">


		<tr>
			<td><label for="username">Username</label></td>
			<td><input type="text" name="username"></td>
			<td><span class="asterisc">*</span></td>	
		</tr>
		<tr>
			<td><label for="email">E-mail</label></td>
			<td><input type="text" name="email"></td>
			<td><span class="asterisc">*</span></td>	
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td><input type="password" name="password"></td>
			<td><span class="asterisc">*</span></td>		
		</tr>
		


		<tr>
			<td></td><td><input type="submit" class="hvr-glow" value="Register user"></td>	
		</tr>

	</table>


</body>
</html>
