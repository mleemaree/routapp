<?php

session_start();
$_SESSION['name']='user';
include('../conexion-php-calls/conexion-routapp.php');

$sql1="SELECT * FROM routes where routeID='15'";
$sql2="SELECT * FROM zones where routeID='15'";
$sql3="SELECT * FROM exercise where zoneNum='1'";
?>


<p class="">ROUTE PREVIEW</p>

	<?php

	if ($result = $conexion->query($sql1)) {
			$fila = $result->fetch_assoc(); 
	    ?>

			<p class="user-routes">
				<?php echo $fila['title']; ?><br>
				<?php echo $fila['subtitle']; ?><br>
				<?php echo $fila['credits']; ?><br><br>
				<?php echo $fila['distance'];?><br>
				<?php echo $fila['calories'];?><br>
				<?php echo $fila['exerciseNum'];?><br>
				<?php echo $fila['description'];?><br>
				<?php echo $fila['exercType'];?><br>
				<?php echo $fila['exercParts'];?><br>
				<?php echo $fila['exercZones'];?><br>
				<?php echo $fila['material'];?><br>
				<?php echo $fila['groundType'];?><br>
				<?php echo $fila['other'];?><br>
			</p>
	<?php			 

			$result->close();
			include('zones_single_route.php');
						
	} 
	?>	


