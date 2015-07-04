<?php

if ($result2 = $conexion->query($sql2)) {
		$fila2 = $result2->fetch_assoc();  

		do {   

		$y=$fila2['zoneNum'];
		echo $y;			

    				?>





   	<div class="row" style="margin:0;">
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num"><?php echo $y; ?></span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance"><?php echo $fila2['km']; ?> Km</span>
				</div>
			</div>
			<div class="row zone-info-wrapper">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-2 zone-img">
							<img id="zone-img" src="images/route/zone-img.png">
						</div>
						<div class="col-xs-5">
							<div class="row zone-exercises-info">
								<div class="col-xs-6 types">
									<p>Tipo de Ejercicio:</p>
									<p>Parte a Ejercitar:</p>
									<p>N° de Ejercicios</p>
								</div>
								<div class="col-xs-6 names">
									<span class="name" id="exercType"><?php echo $fila2['exercType']; ?></span>
									<span class="name" id="exercParts"><?php echo $fila2['exercParts'];?></span>
									<span class="name" id="exercNumber"><?php echo $fila2['exercNumber']; ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-5 zone-desc">
							<div class="row">
								<div class="col-xs-3 zone-desc types">
									<p>Descripción</p>
								</div>
								<div class="col-xs-9 zone-desc">
									<span class="desc-name" id="zone-details"><?php echo $fila2['details'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



					<?php

					if ($fila2['zoneNum']==1) {
					include('exercise_zone_single_route.php'); }
    		
				} while($fila2 = $result2->fetch_assoc());
		$result2->close();

}

?>
</div>




	
