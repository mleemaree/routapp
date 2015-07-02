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
									<span class="name" id="exercType"><?php echo $fila['exercType']; ?></span>
									<span class="name" id="exercParts"><?php echo $fila['exercParts'];?></span>
									<span class="name" id="exercNumber"><?php echo $fila['exercNumber']; ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-5 zone-desc">
							<div class="row">
								<div class="col-xs-3 zone-desc types">
									<p>Descripción</p>
								</div>
								<div class="col-xs-9 zone-desc">
									<span class="desc-name" id="zone-details"><?php echo $fila['descriptionZ'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>








					<?php
    		

		$result->close();
		include('exercise_zone_single_route.php');

}

?>
</div>
</div>
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num">2</span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance">2,7 Km</span>
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
									<span class="name" id="exercType">Potencia<?php echo $fila['exercType']; ?></span>
									<span class="name" id="exercParts">Pierna - Cuadriceps<?php echo $fila['exercParts'];?></span>
									<span class="name" id="exercNumber">4<?php echo $fila['exercNumber']; ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-5 zone-desc">
							<div class="row">
								<div class="col-xs-3 zone-desc types">
									<p>Descripción</p>
								</div>
								<div class="col-xs-9 zone-desc">
									<span class="desc-name" id="zone-details">In sed magna ullamcorper, interdum arcu non, dictum enim. Nulla id arcu ac dolor fermentum tincidunt.<?php echo $fila['descriptionZ'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-1 flags">
			<img class="start-flag" src="">
		</div>
		<div class="col-xs-11 zones-titles infosman2">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE <span id="zone-num">3</span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance">5,2 Km</span>
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
									<span class="name" id="exercType">Tonificación<?php echo $fila['exercType']; ?></span>
									<span class="name" id="exercParts">Abdominales<?php echo $fila['exercParts'];?></span>
									<span class="name" id="exercNumber">4<?php echo $fila['exercNumber']; ?></span>
								</div>
							</div>
						</div>
						<div class="col-xs-5 zone-desc">
							<div class="row">
								<div class="col-xs-3 zone-desc types">
									<p>Descripción</p>
								</div>
								<div class="col-xs-9 zone-desc">
									<span class="desc-name" id="zone-details">In sed magna ullamcorper, interdum arcu non, dictum enim. Nulla id arcu ac dolor fermentum tincidunt.<?php echo $fila['descriptionZ'];?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!--inciniando-->

	
