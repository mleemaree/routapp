<?php

session_start();
$_SESSION['name']='user';

$sql="SELECT * FROM routes WHERE username = 'routapp'";

?>

<div class="container routes">
<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

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

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	

</div><!--routes container-->
