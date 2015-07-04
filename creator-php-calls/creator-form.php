<?php



?>


   <form action="creator-php-calls/route-register.php" method="post" enctype="multipart/form-data">



<div class="container modal fade" id="crear-ruta-char">
	<div class="row crear-ruta-info-title">
		<div class="col-xs-12 la">
	    	<a class="close" data-dismiss="modal">×</a>
			<h4>Información de la Ruta</h4>
		</div>
	</div>
	<div class="modal-body">
		<div class="row nombre">
			<div class="col-xs-2 crear-labels">
				<label for="title">Nombre</label>
			</div>
			<div class="col-xs-9 crear-input"> 
				<input type="text" name="title">
			</div>
			<div class="col-xs-1 ok-arrow">
				<img src="images/iconos/ok-arrow.png">
			</div>
		</div>
		<div class="desc row">
			<div class="col-xs-2 crear-labels">
				<label for="description">Descripción</label>
			</div>
			<div class="col-xs-9 crear-input">
				<textarea rows="3" name="description"></textarea>
			</div>
			<div class="col-xs-1 ok-arrow">
				<img src="images/iconos/ok-arrow.png">
			</div>
		</div>
		<div class="row crear-ruta-info-title">
			<div class="col-xs-12 la">
				<h4>Características principales de la Ruta</h4>
			</div>
		</div>
		<div class="row crear-trazado-type">
			<div class="col-xs-12 col-sm-9">
				<div class="row">
					<div class="col-xs-4 crear-traz-title">
						<label for="trazando">Trazando de la Ruta:</label>
					</div>
					<div class="col-xs-4 crear-traz-cir">
						<p>Circular</p><input type="radio" name="trazando" value="Circular">
					</div>
					<div class="col-xs-4 crear-traz-lin">
						<p>Lineal</p><input type="radio" name="trazando" value="Lineal">
					</div>
				</div>
			</div>
			<div class="hidden-xs col-sm-3"></div>
		</div>
		<div class="row crear-char-names">
			<div class="col-xs-6 col-sm-3">
				<h4>Tipo de ejercicio</h4>
			</div>
			<div class="col-xs-6 col-sm-3">
				<h4>Zona a Ejercitar</h4>
			</div>
			<div class="col-xs-6 col-sm-3">
				<h4>Material adicional</h4>
			</div>
			<div class="col-xs-6 col-sm-3">
				<h4>Información adicional</h4>
			</div>
		</div>
		<div class="row crear-char-chars">
			<div class="col-xs-6 col-sm-3 char">
				<ul>
					<li>Resistencia <input type="checkbox" name="exercType[]" value="Resistencia"></li>
					<li>Velocidad <input type="checkbox" name="exercType[]" value="Velocidad"></li>
					<li>Potencia <input type="checkbox" name="exercType[]" value="Potencia"></li>
					<li>Elasticidad <input type="checkbox" name="exercType[]" value="Elasticidad"></li>
					<li>Musculación <input type="checkbox" name="exercType[]" value="Musculación"></li>
					<li>Agilidad <input type="checkbox" name="exercType[]" value="Agilidad"></li>
					<li>Equilibrio <input type="checkbox" name="exercType[]" value="Equilibrio"></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 char">
				<ul>
					<li>Piernas <input type="checkbox" name="exercZones[]" value="Piernas"></li>
					<li>Brazos <input type="checkbox" name="exercZones[]" value="Brazos"></li>
					<li>Potencia <input type="checkbox" name="exercZones[]" value="Espalda"></li>
					<li>Torso <input type="checkbox" name="exercZones[]" value="Torso"></li>
					<li>Abdominales <input type="checkbox" name="exercZones[]" value="Abdominales"></li>
					<li>Hombros <input type="checkbox" name="exercZones[]" value="Hombros"></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 char">
				<ul>
					<li>TRX <input type="checkbox" name="material[]" value="TRX"></li>
					<li>Balón de pilates <input type="checkbox" name="material[]" value="Balón de pilates"></li>
					<li>Kettleball <input type="checkbox" name="material[]" value="Kettleball"></li>
					<li>Teraband <input type="checkbox" name="material[]" value="Teraband"></li>
					<li>Esterillas <input type="checkbox" name="material[]" value="Esterillas"></li>
					<li>Pesas de pies <input type="checkbox" name="material[]" value="Pesas de pies"></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 char">
				<ul>
					<li>Fuentes potables <input type="checkbox" name="other[]" value="Fuentes potables"></li>
					<li>Transporte público <input type="checkbox" name="other[]" value="Transporte público"></li>
					<li>Parques <input type="checkbox" name="other[]" value="Parques"></li>
					<li>Zona iluminada <input type="checkbox" name="other[]" value="Zona iluminada"></li>
					<li>Esterillas <input type="checkbox" name="other[]" value="Esterillas"></li>
					<li>Sin tráfico <input type="checkbox" name="other[]" value="Sin tráfico"></li>
					<li>Tierra <input type="checkbox" name="other[]" value="Tierra"></li>
					<li>Asfalto <input type="checkbox" name="other[]" value="Asfalto"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row submit">
		<input id="crear-char-submit" data-dismiss="modal" type="submit" value="Guardar">
	</div>
</div><!--CHARACTERISTICS OF CREATED ROUTE CLOSE-->
</form>

