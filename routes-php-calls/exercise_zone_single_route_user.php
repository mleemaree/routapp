<?php

if ($result = $conexion->query($sql3)) {
		$fila = $result->fetch_assoc(); 

		$i=1;

    	do  {     		

    			?>


			<div class="row zone-info-wrapper">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<p>Nombre del ejercicio: <?php echo $i;?> - <?php echo $fila['exName']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-3">
							<p>Tipo: <?php echo $fila['type']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-3">
							<p>Series: <?php echo $fila['series']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-3">
							<p>Repeticiones: <?php echo $fila['repetition'];?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row zone-desc-title">
				<h4>Descripción del Ejercicio</h4>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<p><?php echo $fila['descriptionEx'];?></p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-xs-4">
							<img src="images/route/zone-img.png">
						</div>
						<div class="col-xs-4">
							<img src="images/route/zone-img.png">
						</div>
						<div class="col-xs-4">
							<img src="images/route/zone-img.png">
						</div>
					</div>
				</div>


			
						<?php 
						$i=$i+1;
						echo '<hr>'; ?>

		    	<?php

    				} while ($fila = $result->fetch_assoc());
					$result->close();
} 

?>	




