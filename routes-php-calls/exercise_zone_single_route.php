<?php

if ($result = $conexion->query($sql3)) {
		$fila = $result->fetch_assoc(); 

		$i=1;

    	do  {     		

    			?>

		<div style="float:right; margin:15px;">
			<div class="row ejercicio-title">
				<div class="col-xs-12 exercise-title-wrapper">
					<h3 id="exercise-title">Ejercicio <?php echo $i;?> - <?php echo $fila['title']; ?></h3>
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
							<span class="name" id="exercise-series"><?php echo $fila['series']; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 types">
							<p>Repeticiones:</p>
						</div>
						<div class="col-xs-7">
							<span class="name" id="exercise-series"><?php echo $fila['repetition'];?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-5 types">
							<p>Descanso:</p>
						</div>
						<div class="col-xs-7">
							<span class="name" id="exercise-series"><?php echo $fila['rest']; ?></span>
						</div>
					</div>
					<div class="row descriptionΕ-title">
						<p class="ex-desc-title">Descripción</p>
					</div>
					<div class="row descriptionΕ-text">
						<span id="descriptionΕ"><?php echo $fila['descriptionEx'];?></span>
					</div>
				</div>
			</div>


			
						<?php 
						$i=$i+1;


    				} while ($fila = $result->fetch_assoc());
					$result->close();
} 

?>	
		</div><!--container exercises-->

</div><!--initial container.-->

