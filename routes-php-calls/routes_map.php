<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-4 mapa-route-card-list">
			<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['username'] == "routapp") {

    			?>

    			<p class="bought-route-card-mapa">

						<?php echo $fila['title']; ?><br>
						<?php echo $fila['subtitle']; ?><br>
						<?php echo $fila['credits']; ?><br><br>
						<?php echo $fila['distance'];?><br>
						<?php echo $fila['calories'];?><br>
						<?php echo $fila['exerciseNum'];?><br>
						

				</p>
			
						<?php echo '<hr>';?>
				<?php    			
    		}

    		else{
    			?>

    		<div class="mapa-user-card">
    			<div class="row its">
    				<div class="col-xs-12 map-user-card-title">
    					<h3 class="mapa-user-card-title"><?php echo $fila['title']; ?></h3>
    				</div>
    			</div>
				<div class="row its">
					<div class="col-xs-12 rating-wrapper">
						<img src="images/iconos/rating.png">
					</div>
				</div>
				<div class="row mapa-user-card-metrics">
					<div class="col-xs-4 ind-metric">
						<img src="../images/shoe.png">
						<span class="met-num" id="mapa-user-card-distance"><?php echo $fila['distance'];?></span>
						<p class="mapa-user-card-info">Km</p>
					</div>
					<div class="col-xs-4 ind-metric">
						<img src="../images/fire.png">
						<span class="met-num" id="mapa-user-card-vcal"><?php echo $fila['calories'];?></span>
						<p class="mapa-user-card-info">KCal</p>
					</div>
					<div class="col-xs-4 ind-metric">
						<img src="../images/arm.png">
						<span class="met-num" id="mapa-user-card-distance"><?php echo $fila['exerciseNum'];?></span>
						<p class="mapa-user-card-info">Ejercicios</p>
					</div>
				</div>
			</div>









		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	
		</div>
		<div class="col-xs-12 col-sm-8">
			<img id="mapa-mapa" alt="mapa-mapa img img-responsive" src="images/route/mapa-mapa.png">
		</div>
	</div>
</div>













