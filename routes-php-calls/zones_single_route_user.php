<?php

if ($result = $conexion->query($sql2)) {
		$fila = $result->fetch_assoc();     		

    				?>

    				<p>
						<?php echo "ZONE 1<br><br>";?>
						<?php echo $fila['km']; ?><br>

					</p>

					<?php
    		

		$result->close();
		include('exercise_zone_single_route_user.php');
}

?>	


