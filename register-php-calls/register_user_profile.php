<?php

session_start();
$_SESSION['name']='user';
include('../conexion-php-calls/conexion-routapp.php');

echo $_SESSION['user']['username'];


if ($_FILES['avatar']['error'] == 0) {
	$image_name=$_FILES['avatar']['name'];
	move_uploaded_file($_FILES['avatar']['tmp_name'], 'user_images/'.$_SESSION['user']['username'].'-'.$image_name); 
	chmod('user_images/'.$_SESSION['user']['username'].'-'.$image_name, 511); 
	$img=", avatar='".$_SESSION['user']['username'].'-'.$image_name."'";


}

$sql = "SET foreign_key_checks=0";

$sql1 = "UPDATE users SET firstName='".$_POST['firstName']."',
							 username='".$_POST['username']."',
							 lastName1='".$_POST['lastName1']."',
							 lastName2='".$_POST['lastName2']."',
							 birthday='".$_POST['birthday']."',
							 gender='".$_POST['gender']."',
							 height='".$_POST['height']."',
							 weight='".$_POST['weight']."',
							 street='".$_POST['street']."',
							 postalCode='".$_POST['postalCode']."',
							 city='".$_POST['city']."',
							 sportLevel='".$_POST['sportLevel']."',
							 motivation='".$_POST['motivation']."',
							 goals='".$_POST['goals']."',
							 email='".$_POST['email']."',
							 password='".$_POST['password']."'
							 ".$img."
         WHERE userID=".$_SESSION['user']['userID'];

$sql2 = "UPDATE routes SET avatar= '".$img."' WHERE username=".$_SESSION['user']['username'];





// PASSWORDS CHECK //


         if (($_POST['password']) != ($_POST['password2']) ){

?>			
			<script> alert ("Passwords doesn't match!"); window.location="user_profile.php"; </script>
<?php
		}

		else {

			$conexion->query($sql);
			$conexion->query($sql1);
			$conexion->query($sql2);
			echo $_SESSION['user']['username'];
			echo $_SESSION['user']['avatar'];

		}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register User Profile</title>
</head>

<body>

<table id="sample">

	<tr>
		<td><p>Success!!!</p></td>
	</tr>
	<tr>
		<td><?php $msg='<a href="user_profile.php" class="success_message">User Profile »</a>';

			echo $msg; ?></td>
	</tr>
	
</table>

</body>
</html>


