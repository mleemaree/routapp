<?php

session_start();
$_SESSION['name']='user';

$sql="SELECT * FROM routes WHERE (routeID = '15') or (routeID = '17') or (routeID = '25') or (routeID = '40')";

?>

<div class="container routes">
<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['username'] == "routapp") {

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
