<?php 
session_start();
include('conexion-routapp.php');
$message="";

if(count($_POST)>0) {

$result = mysql_query("SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["userID"] = $row[userID];
$_SESSION["email"] = $row[email];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["userID"])) {
header("Location:routes.php");
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

<div id="login"> 

	<div id="mydiv">

		<form action="login.php" method="post">

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
				<tr>
						<td></td><td><?php if($message!="") { echo $message; } ?></td>	
				</tr>

		</form>

	</div>

</div>

</body>
</html>

