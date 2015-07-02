<?php

if ($result = $conexion->query($sql2)) {
		$fila = $result->fetch_assoc();     		

    				?>

    <div class="row inciniando">
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">Inicio de la Ruta</h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance">0 Km</span>
				</div>
			</div>
		</div>
	</div>

	<div class="row inciniando">
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num">1</span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance"><?php echo $fila['km']; ?> Km</span>
				</div>
			</div>

    				

					<?php
    		

		$result->close();
		include('exercise_zone_single_route_user.php');
}

?>	


