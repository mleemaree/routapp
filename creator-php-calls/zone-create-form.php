<?php

$sql="SELECT * FROM routes WHERE routeID=".$_SESSION['route']['routeID'];

?>

	<div class="row">
		<div class="col-xs-12 zones-titles infosman">
			<div class="row zone-title-wrapper zones-row">
				<div class="col-xs-12">
					<h4 class="in-title zone-title">ZONE 1</span></h4>
					<img class="in-title running-guy" src="images/iconos/runner.png">
					<span class="in-title zone-distance">3 Km</span>
				</div>
			</div>
		</div>
	</div>
	<form id="zone-creator-form" action="creator-php-calls/zone-register.php" method="post" enctype="multipart/form-data">


		<div class="row cr-ex-ti">
			<div class="col-xs-3">
				<label for="type">Tipo de Ejercicio</label>
			</div>
			<div class="col-xs-7">
				<label for="descriptionEx">Descripción del Ejercicio</label>
			</div>
			<div class="col-xs-2">
				<div class="row">
					<ul class="nav nav-tabs nav-justified">
						<li><img alt="add-page" src="images/iconos/add-page.png"></li>
						<li><img alt="write-page" src="images/iconos/write-page.png"></li>
						<li><img alt="exit-page" src="images/iconos/exit-page.png"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row cet-inputs">
			<div class="col-xs-3">
				<div class="row">
					<select id="type" name="exercType">
						<option></option>
						<option>Musculación</option>
						<option>Resistencia</option>
						<option>Elasticidad</option>
						<option>Agilidad</option>
						<option>Equilibrio</option>
					</select>
				</div>
				<div class="row">
					<label for="exName">Nombre del Ejercicio</label>
				</div>
				<div class="row">
					<input type="text" name="exName">
				</div>
				<div class="row" style="margin:0 -15px;">
					<div class="col-xs-4">
						<label  class="s" for="repetition">Rep.</label>
						<input type="text" name="repetition">
					</div>
					<div class="col-xs-4">
						<label  class="s" for="series">Series</label>
						<input type="text" name="series">
					</div>
					<div class="col-xs-4">
						<label  class="s" for="rest">Desc.</label>
						<input type="text" name="rest">
					</div>
				</div>
			</div>
			<div class="col-xs-9">
				<textarea class="descriptionEx" name="descriptionEx"></textarea>
			</div>
		</div>
		<div class="row crear-media">
			<div class="col-xs-12 col-sm-6">
				<p>Imágenes</p>
				<img alt="create images" src="images/crear/crear-imgs.png">
			</div>
			<div class="col-xs-12 col-sm-3 vid">
				<div class="vid-title">
					<p>Video<p>
					<div class="vine-yt">
						<img src="images/crear/vine.png">
						<img src="images/crear/yt.png">
					</div>
				</div>
				<img alt="create video" src="images/crear/crear-video.png">
			</div>
			<div class="col-xs-12 col-sm-3">
				<input id="zon-ex-sub" type="submit" value="Guardar">
			</div>
		</div>






</form>



