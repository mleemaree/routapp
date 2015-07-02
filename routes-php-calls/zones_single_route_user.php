<?php

if ($result2 = $conexion->query($sql2)) {
		$fila2 = $result2->fetch_assoc(); 

		do {    

		$y=$fila2['zoneNum'];		

    				?>


	<div>
		<div class="row inciniando">
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman" style="float:right;">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num"><?php echo $y; ?></span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance"><?php echo $fila2['km']; ?> Km</span>
				</div>
			</div>
		</div>
	</div>

	

    				

					<?php




					include('exercise_zone_single_route_user.php'); 
    		
				} while($fila2 = $result2->fetch_assoc());

		$result2->close();
}

?>	


