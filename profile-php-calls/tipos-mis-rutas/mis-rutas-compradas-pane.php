
<div id="mis-rutas-compradas-pane-wrapper">

	<?php

$sql="SELECT * FROM routes ";

?>

<div class="container routes">
<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['username'] == "routapp") {

    			?>
    		<a href="ind-route-pro.php?routeID=<?php echo $fila['routeID']; ?>">
    			<div class="bought-route-card">
    				<div class="row routes-list-row bought-topRow">
    					<div class="col-xs-12 col-sm-6 bought-title">
    						<h2 class="bought-route-card-title">
								<?php echo $fila['title']; ?>
							</h2>
						</div>
						<div class="hidden-xs col-sm-6"></div>
					</div>
					<div class="row routes-list-row">
    					<div class="col-xs-12 col-sm-6">
    						<h2 class="bought-route-card-subtitle">
								<?php echo $fila['subtitle']; ?>
							</h2>
						</div>
						<div class="hidden-xs col-sm-6"></div>
					</div>
					<div class="row routes-list-row">
						<div class="col-xs-12 col-sm-6 bought-metric-guages">
							<div class="row routes-list-row">
								<div class="col-xs-4">
									<h4 class="bought-metrics">KILÓMETROS</h4>
									<img class="bought-metric-image" src="../images/shoe.png">
								</div>
								<div class="col-xs-4">
									<h4 class="bought-metrics">KILOCALORÍAS</h4>
									<img class="bought-metric-image" src="../images/fire.png">
								</div>
								<div class="col-xs-4">
									<h4 class="bought-metrics">EJERCICIOS</h4>
									<img class="bought-metric-image" src="../images/arm.png">
								</div>
							</div>
						</div>
						<div class="hidden-xs col-sm-6"></div>
					</div>
					<div class="row routes-list-row">
						<div class="col-xs-12 col-sm-6 bought-mins">
							<div class="row routes-list-row">
								<div class="col-xs-4">
									<h4 class="bought-metric-numbers"><?php echo $fila['distance'];?></h4>
								</div>
								<div class="col-xs-4">
									<h4 class="bought-metric-numbers"><?php echo $fila['calories'];?></h4>
								</div>
								<div class="col-xs-4">
									<h4 class="bought-metric-numbers"><?php echo $fila['exerciseNum'];?></h4>
								</div>
							</div>
						</div>
						<div class="hidden-xs col-sm-6"></div>
					</div>
				</div>
			</a>


			<?php echo '<hr>'; ?>
				<?php    			
    		}

    		else{

    			$mapid=rand(1,2000);
    			?>
    		
		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	

</div><!--routes container-->

</div>

