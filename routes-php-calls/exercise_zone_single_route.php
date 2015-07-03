<?php

$sql3="SELECT * FROM exercise where (zoneNum='".$y."') and (routeID='".$_GET['routeID']."')";

if ($result3 = $conexion->query($sql3)) {
		$fila3 = $result3->fetch_assoc(); 

		$i=1;

    	do  {    ?>

				<div style="float:right; margin:15px;">
					<div class="row ejercicio-title">
						<div class="col-xs-12 exercise-title-wrapper">
							<h3 id="exercise-title">Ejercicio <?php echo $i;?> - <?php echo $fila3['exName']; ?></h3>
						</div>
					</div>
					<div class="row exercise-info">
						<div class="col-xs-6 info-images">
							<img class="img img-responsive" src="images/route/zone-images.png">
						</div>
						<div class="col-xs-6 info-text">
							<div class="row">
								<div class="col-xs-5 types">
									<p>Series:</p>
								</div>
								<div class="col-xs-7">
									<span class="name" id="exercise-series"><?php echo $fila3['series']; ?></span>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5 types">
									<p>Repeticiones:</p>
								</div>
								<div class="col-xs-7">
									<span class="name" id="exercise-series"><?php echo $fila3['repetition'];?></span>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-5 types">
									<p>Descanso:</p>
								</div>
								<div class="col-xs-7">
									<span class="name" id="exercise-series"><?php echo $fila3['rest']; ?></span>
								</div>
							</div>
							<div class="row descriptionΕ-title">
								<p class="ex-desc-title">Descripción</p>
							</div>
							<div class="row descriptionΕ-text">
								<span id="descriptionΕ"><?php echo $fila3['descriptionEx'];?></span>
							</div>
						</div>
					</div>


			
						<?php 
						$i=$i+1;
    	} while ($fila3 = $result3->fetch_assoc());
					$result3->close();
	} 

				?>	
		</div><!--container exercises-->

</div><!--initial container.-->

