<div id="mis-rutas-creadas-pane-wrapper">

<?php

$sql="SELECT * FROM routes ";

?>

<div class="container routes" style="margin:2% 0;">
<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['routeID'] == "15") {

    			?>

				<?php    			
    		}

    		else{

    			$mapid=rand(1,2000);
    			?>
    		<a href="ind-route-user.php?routeID=<?php echo $fila['routeID']; ?>">
		    	<div class="route-card">
		    		<div class="row routes-list-row">
						<div class="col-xs-12 col-sm-6" class="map" style="height:150px; padding:0;">
							<div class="map" class="map-<?php echo $mapid ?>">
								<div class="user">
		    						<img class="user-route-card-img" src="register-php-calls/user_images/<?php echo $fila['avatar']?>">
		    						<img src="images/<?php echo $fila['map']?>">

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
			</a>
			
						<hr style="border:none;">
		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	

</div><!--routes container-->


</div>