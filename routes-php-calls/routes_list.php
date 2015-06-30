<?php

$sql="SELECT * FROM routes ";

?>

<div class="container routes">
<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['routeID'] == "15") {

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
									<h4 class="metrics">KILCALORÍAS</h4>
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
			<?php echo '<hr>'; ?>
				<?php    			
    		}

    		else if ($fila['username'] == "routapp") {

    			?>

    			<div class="bought-route-card">

						<?php echo $fila['title']; ?>
						<?php echo $fila['subtitle']; ?>
						<?php echo $fila['distance'];?>
						<?php echo $fila['calories'];?>
						<?php echo $fila['exerciseNum'];?>
						

				</div>
			<?php echo '<hr>'; ?>
				<?php    			
    		}

    		else{
    			?>

		    	<div class="route-card">
		    		<div class="row routes-list-row">
						<div class="col-xs-12 col-sm-6" class="map" style="height:150px; padding:0;">
							<div class="map" class="map">
								<div class="user">
		    						<img src="register-php-calls/user_images/<?php echo $fila['avatar']?>">
		    					</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 whiteness">
							<div class="row routes-list-row" style="padding: 2% 5%;">
								<div class="col-xs-10">
									<?php echo $fila['title']; ?>
								</div>
								<div class="col-xs-2" style="padding:0;">
									<div class="star-rating">
										<img src="../images/stars.png">
									</div>
								</div>
							</div>
							<div class="row routes-list-row" style="padding:10% 5% 0;">
								<div class="col-xs-3 route-info">
									<img src="../images/shoe.png">
									<span class="number"><?php echo $fila['distance'];?></span>
									<p>km</p>
								</div>
							
								<div class="col-xs-4 route-info">
									<img src="../images/fire.png">
									<span class="number"><?php echo $fila['calories'];?></span>
									<p>Kcal</p>
								</div>
								<div class="col-xs-4 route-info">
									<img src="../images/arm.png">
									<span class="number"><?php echo $fila['exerciseNum'];?></span>
									<p>Ejercicios</p>
								</div>
								<div class="col-xs-1"></div>
							</div>
						</div>
					</div>
				</div>
			
						<?php echo '<hr>'; ?>
		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	

</div><!--routes container-->