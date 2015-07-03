<?php

session_start();
$_SESSION['name']='user';
include('../conexion-php-calls/conexion-routapp.php');

$sql1="SELECT * FROM routes where routeID=".$_GET['routeID'];
$sql2="SELECT * FROM zones where routeID=".$_GET['routeID'];

?>



	<?php

	if ($result1 = $conexion->query($sql1)) {
			$fila1 = $result1->fetch_assoc(); 
	    ?>


<div class="container user-route-title">
	<div class="row user-route-title-wrapper">
		<div class="col-xs-12 col-sm-8">
			<h2 class="user-route-title"><?php echo $fila1['title']; ?><br></h2>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-6">
					<img src="../images/iconos/rating.png">
				</div>
				<div class="col-xs-2">
					<img src="../images/iconos/download_pro.png">
				</div>
				<div class="col-xs-2">
					<img src="../images/iconos/share_pro.png">
				</div>
				<div class="col-xs-2">
					<img src="../images/iconos/favorite_pro.png">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-4">
					<img src="images/shoe.png">
					<?php echo $fila1['distance'];?>
				</div>
				<div class="col-xs-4">
					<img src="images/fire.png">
					<?php echo $fila1['calories'];?>
				</div>
				<div class="col-xs-4">
					<img src="images/arm.png">
					<?php echo $fila1['exerciseNum'];?>
				</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-4"></div>
		<div class="col-xs-12 col-sm-4">

			<p>Ruta creada por <span id="username"><?php echo $fila1['username'];?></span></p>
			<img src="register-php-calls/user_images/<?php echo $fila1['avatar'];?>">
		</div>
	</div>
</div>

<div class="col-xs-12 user-map"></div>


<div class="container desc">
	<div class="row desc-title">
		<div class="col-xs-12 col-sm-10">
			<h2>Descripción</h2>
		</div>
	</div>
	<div class="row desc-text">
		<div class="col-xs-12">
			<p><?php echo $fila1['description']; ?><br></p>
		</div>
	</div>
</div>


<div class="container">
	<div class="row info-ruta-menu-wrapper" style="margin:2% -15px;">
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


				
				<?php 

				include('zones_single_route_user.php'); ?>

	<div style="float:right; width:100%">
		<div class="row inciniando">
			<div class="col-xs-1 flags">
				<img class="start-flag" src="">
			</div>
			<div class="col-xs-11 zones-titles infosman">
				<div class="row zone-title-wrapper zones-row">
					<div class="col-xs-12">
						<h4 class="in-title zone-title">Final de la ruta</h4>
						<img class="in-title running-guy" src="images/iconos/runner.png">
						<span class="in-title zone-distance"><?php echo $fila1['distance']; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php

			$result1->close();
			
						
	} 
	?>	
</div>
</div><!---inciniando-->


