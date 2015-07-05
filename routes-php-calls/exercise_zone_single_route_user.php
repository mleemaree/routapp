<?php

$sql3="SELECT * FROM exercise where (zoneNum='".$y."') and (routeID='".$_GET['routeID']."')";

if ($result3 = $conexion->query($sql3)) {
		$fila3 = $result3->fetch_assoc(); 

		$i=1;

    	do  {     		

    			?>

		<div class="mini-zones-wrapper" style="width:91.6%; float:right;">
			<div class="row zone-info-wrapper">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-6 col-sm-4">
							<p>Nombre del ejercicio: <span class="result-zone-info" style="font-weight:bold;"><?php echo $fila3['exName']; ?></span></p>
						</div>
						<div class="col-xs-6 col-sm-2">
							<p>Tipo: <span class="result-zone-info" style="font-weight:bold;"><?php echo $fila3['type']; ?></span></p>
						</div>
						<div class="col-xs-6 col-sm-2">
							<p>Series: <span class="result-zone-info" style="font-weight:bold;"><?php echo $fila3['series']; ?></span></p>
						</div>
						<div class="col-xs-6 col-sm-2">
							<p>Repeticiones: <span class="result-zone-info" style="font-weight:bold;"><?php echo $fila3['repetition'];?></span></p>
						</div>
						<div class="col-xs-6 col-sm-2">
							<p>Descanso: <span class="result-zone-info" style="font-weight:bold;"><?php echo $fila3['rest'];?></span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row exercise-title-wrapper">
				<h4 id="exercise-title"><span class="result-zone-info" style="font-weight:bold;">Descripción del Ejercicio</span></h4>
			</div>
			<div class="row desc-exer">
				<div class="col-xs-12 col-sm-6">
					<p><?php echo $fila3['descriptionEx'];?></p>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="row">
						<div class="col-xs-4">
							<img src="images/route/zone-img.png">
						</div>
						<div class="col-xs-4">
							<img src="images/route/zone-img-2.png">
						</div>
						<div class="col-xs-4">
							<img src="images/route/zone-img-3.png">
						</div>
					</div>
				</div>
			</div>
</div>

	
						<?php 
						$i=$i+1;
						 ?>

		    	<?php

    				} while ($fila3 = $result3->fetch_assoc());
					$result3->close();
} 

?>	




