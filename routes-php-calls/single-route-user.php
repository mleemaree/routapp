<?php

session_start();
$_SESSION['name']='user';
include('conexion-routapp.php');

$sql1="SELECT * FROM routes where routeID='17'";
$sql2="SELECT * FROM zones where routeID='17'";
$sql3="SELECT * FROM exercise where (zoneID='4') or (routeID='17')";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

   <title> Logged in </title>


</head>
<body>

<p class="">ROUTE PREVIEW</p>

	<?php

	if ($result = $conexion->query($sql1)) {
			$fila = $result->fetch_assoc(); 
	    ?>

			<p class="user-routes">
				<?php echo $fila['title']; ?><br>

				<?php echo $fila['distance'];?><br>
				<?php echo $fila['calories'];?><br>
				<?php echo $fila['exerciseNum'];?><br>

				Ruta creada por: <?php echo $fila['username'];?>  
				<img src="user_images/<?php echo $fila['avatar'];?>"><br><br>


				Information de la ruta <br><br>

			</p>
				
				<?php 

			$result->close();
			include('zones_single_route_user.php');
						
	} 
	?>	

</body>
</html>

