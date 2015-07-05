<?php

session_start();
$_SESSION['name']='user';


include('../conexion-php-calls/conexion-routapp.php');


if ($_FILES['avatar']['error'] == 0) {
	$image_name=$_FILES['avatar']['name'];
	move_uploaded_file($_FILES['avatar']['tmp_name'], 'user_images/'.$_SESSION['user']['username'].'-'.$image_name); 
	chmod('user_images/'.$_SESSION['user']['username'].'-'.$image_name, 511); 
	$img=", avatar='".$_SESSION['user']['username'].'-'.$image_name."'";

	$_SESSION['user']['avatar']=$_SESSION['user']['username'].'-'.$image_name;


}

if ($_FILES['coverPhoto']['error'] == 0) {
	$image_name2=$_FILES['coverPhoto']['name'];
	move_uploaded_file($_FILES['coverPhoto']['tmp_name'], 'user_images/'.$_SESSION['user']['username'].'-'.$image_name2); 
	chmod('user_images/'.$_SESSION['user']['username'].'-'.$image_name2, 511); 
	$img2=", coverPhoto='".$_SESSION['user']['username'].'-'.$image_name2."'";

	$_SESSION['user']['coverPhoto']=$_SESSION['user']['username'].'-'.$image_name2;


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
							 ".$img.$img2."
         WHERE userID=".$_SESSION['user']['userID'];

$sql2 = "UPDATE routes SET avatar= '".$_SESSION['user']['avatar']."' WHERE username='".$_SESSION['user']['username']."'";
$sql3 = "UPDATE comments SET avatar= '".$_SESSION['user']['avatar']."' WHERE username='".$_SESSION['user']['username']."'";





// PASSWORDS CHECK //


         if (($_POST['password']) != ($_POST['password2']) ){

?>			
			<script> alert ("Passwords doesn't match!"); window.history.back(); </script>
<?php
		}

		else {

			$conexion->query($sql);
			$conexion->query($sql1);
			$conexion->query($sql2);
			$conexion->query($sql3);
		?>
  			
  			<script> alert ("SUCCESS!"); window.location="../profile.php"; </script>

		<?php			

		}

 ?>





