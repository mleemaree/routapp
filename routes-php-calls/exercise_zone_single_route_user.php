<?php

if ($result = $conexion->query($sql3)) {
		$fila = $result->fetch_assoc(); 

		$i=1;

    	do  {     		

    			?>
	<div class="row inciniando">
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman" style="float:right;">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num"><?php echo $fila ['zoneID']; ?></span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance"><?php echo $fila['km']; ?> Km</span>
				</div>
			</div>
		</div>
	</div>
		<div class="mini-zones-wrapper" style="width:91.6%; float:right;">
			<div class="row zone-info-wrapper">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 col-sm-4">
							<p>Nombre del ejercicio: <?php echo $i;?> - <?php echo $fila['exName']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-3">
							<p>Tipo: <?php echo $fila['type']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-2">
							<p>Series: <?php echo $fila['series']; ?></p>
						</div>
						<div class="col-xs-6 col-sm-3">
							<p>Repeticiones: <?php echo $fila['repetition'];?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row exercise-title-wrapper">
				<h4 id="exercise-title">Descripción del Ejercicio</h4>
			</div>
			<div class="row desc-exer">
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
			</div>
</div>

	
						<?php 
						$i=$i+1;
						 ?>

		    	<?php

    				} while ($fila = $result->fetch_assoc());
					$result->close();
} 

?>	




