<?php

session_start();
$_SESSION['name']='user';
include('../conexion-php-calls/conexion-routapp.php');

$sql1="SELECT * FROM routes where routeID='17'";
$sql2="SELECT * FROM zones where routeID='17'";
$sql3="SELECT * FROM exercise where (zoneID='4') or (routeID='17')";
?>



	<?php

	if ($result = $conexion->query($sql1)) {
			$fila = $result->fetch_assoc(); 
	    ?>


<div class="container user-route-title">
	<div class="col-xs-12 col-sm-8">
		<h2><?php echo $fila['title']; ?><br></h2>
	</div>
	<div class="col-xs-12 col-sm-4">
		<div class="row">
			<div class="col-xs-6">
				<img src="stars.png">
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
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-4">
					<img src="images/shoe.png">
					<?php echo $fila['distance'];?>
				</div>
				<div class="col-xs-4">
					<img src="images/fire.png">
					<?php echo $fila['calories'];?>
				</div>
				<div class="col-xs-4">
					<?php echo $fila['exerciseNum'];?>
				</div>
			</div>
		</div>
		<div class="hidden-xs col-sm-4"></div>
		<div class="col-xs-12 col-sm-4">
			<p>Ruta creada por <span id="username"><?php echo $fila['username'];?></span></p>
			<img src="register-php-calls/user_images/<?php echo $fila['avatar'];?>">
		</div>
	</div>
</div>




<div class="container desc">
	<div class="row desc-title">
		<div class="col-xs-12 col-sm-10">
			<h2>Descripción</h2>
		</div>
	</div>
	<div class="row desc-text">
		<div class="col-xs-12">
			<p><?php echo $fila['description']; ?><br></p>
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
			include('zones_single_route_user.php');
						
	} 
	?>	
</div>


