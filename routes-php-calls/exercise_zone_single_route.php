<?php

if ($result = $conexion->query($sql3)) {
		$fila = $result->fetch_assoc(); 

		$i=1;

    	do  {     		

    			?>


		    		<p class="welcome">Ejercicio <?php echo $i;?> - <?php echo $fila['title']; ?></p>

						<?php echo $fila['series']; ?><br>
						<?php echo $fila['repetition'];?><br>
						<?php echo $fila['rest'];?><br>
						<?php echo $fila['descriptionEx'];?><br>


				</p>
			
						<?php 
						$i=$i+1;
						echo '<hr>'; ?>

		    	<?php

    				} while ($fila = $result->fetch_assoc());
					$result->close();
} 

?>	




