<?php

session_start();
$_SESSION['name']='user';
include('../conexion-php-calls/conexion-routapp.php');

$sql1="SELECT * FROM routes where routeID='15'";
$sql2="SELECT * FROM zones where routeID='15'";
$sql3="SELECT * FROM exercise where zoneNum='1'";
?>



	<?php

	if ($result = $conexion->query($sql1)) {
			$fila = $result->fetch_assoc(); 
	    ?>

<div class="container featured-route">
	<div class="row routes-list-row topRow routes-list-row">
		<div class="col-xs-12 col-sm-6 title">
			<h2 class="featured-route-card-title">
				<?php echo $fila['title']; ?>
			</h2>
		</div>
		<div class="hidden-xs col-sm-6 credits">
			<span class="credit-cost"><?php echo $fila['credits']; ?></span>
		</div>
	</div>
	<div class="row routes-list-row">
		<div class="col-xs-12 col-sm-6">
			<h2 class="featured-route-card-subtitle">
				<?php echo $fila['subtitle']; ?>
			</h2>
		</div>
		<div class="hidden-xs col-sm-6"></div>
	</div>
	<div class="row routes-list-row">
		<div class="col-xs-12 col-sm-6 metric-guages">
			<div class="row routes-list-row">
				<div class="col-xs-4">
					<h4 class="metrics">KILÓMETROS</h4>
					<img class="metric-image" src="../images/shoe.png">
				</div>
				<div class="col-xs-4">
					<h4 class="metrics">KILOCALORÍAS</h4>
					<img class="metric-image" src="../images/fire.png">
				</div>
				<div class="col-xs-4">
					<h4 class="metrics">EJERCICIOS</h4>
					<img class="metric-image" src="../images/arm.png">
				</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-6"></div>
	</div>
	<div class="row routes-list-row">
		<div class="col-xs-12 col-sm-6 mins">
			<div class="row routes-list-row">
				<div class="col-xs-4">
					<h4 class="metric-numbers"><?php echo $fila['distance'];?></h4>
				</div>
				<div class="col-xs-4">
					<h4 class="metric-numbers"><?php echo $fila['calories'];?></h4>
				</div>
				<div class="col-xs-4">
					<h4 class="metric-numbers"><?php echo $fila['exerciseNum'];?></h4>
				</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-6"></div>
	</div>
</div>



<div class="container desc">
	<div class="row desc-title">
		<div class="col-xs-12 col-sm-10">
			<h2>Descripción</h2>
		</div>
		<div class="col-xs-12 col-sm-2">
			<ul class="ruta-opt">
				<li><img class="download" src="images/iconos/download_pro.png"></li>
				<li><img class="share" src="images/iconos/share_pro.png"></li>
				<li><img class="favorite" src="images/iconos/favorite_pro.png"></li>
			</ul>
		</div>
	</div>
	<div class="row desc-text">
		<div class="col-xs-12">
			<p><?php echo $fila['description'];?></p>
		</div>
	</div>

</div>

<div class="container char">
	<div class="row char-title">
		<div class="col-xs-12">
			<h2>Características</h2>
		</div>
	</div>
	<div class="row char-info">
		<div class="col-xs-12 col-sm-7">
			<div id="map"></div>
		</div>
		<div class="col-xs-12 col-sm-5">
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Tipos de Ejercicio:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="exercType"><?php echo $fila['exercType'];?></span>
				</div>
			</div>
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Partes a Ejercitar:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="exercParts"><?php echo $fila['exercParts'];?></span>
				</div>
			</div>
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Zonas de Ejercicios:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="exercZones"><?php echo $fila['exercZones'];?></span>
				</div>
			</div>
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Material Adicional:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="material"><?php echo $fila['material'];?></span>
				</div>
			</div>
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Tipo de Suelo:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="groundType"><?php echo $fila['groundType'];?></span>
				</div>
			</div>
			<div class="row charac">
				<div class="col-xs-6 name">
					<p>Otras:</p>
				</div>
				<div class="col-xs-6 type">
					<span id="other"><?php echo $fila['other'];?></span>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="container">
	<div class="row info-ruta-menu-wrapper">
		<div class="col-xs-12">
			<ul class="info-ruta-menu nav nav-tabs nav-justified">
				<li class="active info-ruta-menu-option">
					<p>Información de la Ruta</p>
				</li>
				<li class="info-ruta-menu-option">
					<span id="num-comments">4</span>
					<p style="display:inline;">Comentarios</p>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="container" id="zones-info">



	<?php			 

			$result->close();
			include('zones_single_route.php');
						
	} 
	?>	

</div>




