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
				<ul class="nav nav-tabs nav-justified">
					<li class="user-route-title-menu" style="line-height:3;">
						<div class="col-xs-12">
							<img src="../images/iconos/rating.png">
						</div>
					</li>
					<li class="user-route-title-menu">
						<div class="col-xs-12">
							<img src="../images/iconos/download_pro.png">
						</div>
					</li>
					<li class="user-route-title-menu">
						<div class="col-xs-12">
							<img src="../images/iconos/share_pro.png">
						</div>
					</li>
					<li class="user-route-title-menu">
						<div class="col-xs-12">
							<img src="../images/iconos/favorite_pro.png">
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row" style="padding:2% 0 1%;">
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
		<div class="col-xs-12 col-sm-4" style="display:table-cell; margin-top:-1%; float:right; text-align:right;">
			<p class="creada-por" style="display:inline; vertical-align:middle; padding-right:2%;">Ruta creada por: <span id="username" style="font-weight:bold;"><?php echo $fila1['username'];?></span></p>
			<img id="user-photo" style="display:inline; vertical-align:middle; border-radius:50%; width:50px;" src="register-php-calls/user_images/<?php echo $fila1['avatar'];?>">
		</div>
	</div>
</div>

<div class="col-xs-12 user-map">
	<img style="width:100%;" src="images/maps/map4.png">
</div>


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
					<span id="num-comments">( <?php echo $fila1['comments']; $_SESSION['route']['comments']=$fila1['comments'];?> )</span>
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


