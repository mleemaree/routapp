<?php

session_start();
$_SESSION['name']='user';
include('conexion-routapp.php');

$sql="SELECT * FROM routes ";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

   <title> Routes list </title>

</head>
<body>

<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['username'] == "routapp") {

    			?>

    			<p class="bought-route-card">

						<?php echo $fila['title']; ?><br>
						<?php echo $fila['subtitle']; ?><br>
						<?php echo $fila['credits']; ?><br><br>
						<?php echo $fila['distance'];?><br>
						<?php echo $fila['calories'];?><br>
						<?php echo $fila['exerciseNum'];?><br>
						

				</p>
			
						<?php echo '<hr>';?>
				<?php    			
    		}

    		else{
    			?>

		    	<p class="route-card">

						<?php echo $fila['title']; ?><br>
						<?php echo $fila['credits']; ?><br><br>
						<?php echo $fila['distance'];?><br>
						<?php echo $fila['calories'];?><br>
						<?php echo $fila['exerciseNum'];?><br>
						<img src="user_images/<?php echo $fila['avatar']?>">
						
				</p>
			
						<?php echo '<hr>'; ?>
		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	


</body>
</html>

