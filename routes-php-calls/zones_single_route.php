<?php

if ($result = $conexion->query($sql2)) {
		$fila = $result->fetch_assoc();     		

    				?>

    				<p>
						<?php echo "ZONE 1<br><br>";?>
						<?php echo $fila['km']; ?><br>
						<?php echo $fila['exercType']; ?><br>
						<?php echo $fila['exercParts'];?><br>
						<?php echo $fila['exercNumber'];?><br>
						<?php echo $fila['material'];?><br>
						<?php echo $fila['details'];?><br>
					</p>

					<?php
    		

		$result->close();
		include('exercise_zone_single_route.php');
}

echo "ZONE 2<br><br>";
echo "2,7<br>";
echo "Potencia<br>";
echo "Pierna - Cuadriceps<br>";
echo "4<br>";
echo "In sed magna ullamcorper, interdum arcu non, dictum enim. Nulla id arcu ac dolor fermentum tincidunt.<br>";

echo '<hr>';

echo "ZONE 3<br><br>";
echo "5,2<br>";
echo "Tonificación<br>";
echo "Abdominales<br>";
echo "4<br>";
echo "In sed magna ullamcorper, interdum arcu non, dictum enim. Nulla id arcu ac dolor fermentum tincidunt.<br>";

?>	


