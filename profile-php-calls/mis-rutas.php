<div class="container" id="my-routes">
		<div class="row">
			<div id="ruta-map">
				<img class="img-responsive" id="route-map" src="images/trazado.png">
			</div>
		</div>
<div class="container">
<div class="row">
			<div class="col-xs-12 mis-rutas-menu-wrapper">
				<ul class="mis-rutas-menu">
					<li class="active mis-rutas-menu-option" id="mis-rutas-creadas"><span>Rutas Creadas(5)</span></li>
					<li class="mis-rutas-menu-option" id="mis-rutas-favoritas"><span>Rutas Favoritas(8)</span></li>
					<li class="mis-rutas-menu-option" id="mis-rutas-compradas"><span>Rutas Compradas(3)</span></li>
				</ul>
				<select id="mis-rutas-filtro">
					<option>Filtrar Por</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
			</div>
		</div>
	</div>
	</div><!--container-->
<div class="container" id="mis-rutas-panes">	
	<div class="row" id="mis-rutas-box">
		<div class="col-xs-12" id="mis-rutas-creadas-pane">
			<?php include('tipos-mis-rutas/mis-rutas-creadas-pane.php') ?>
		</div>
		<div class="col-xs-12" id="mis-rutas-favoritas-pane">
			<?php include('tipos-mis-rutas/mis-rutas-favoritas-pane.php') ?>
		</div>
		<div class="col-xs-12" id="mis-rutas-compradas-pane">
			<?php include('tipos-mis-rutas/mis-rutas-compradas-pane.php') ?>
		</div>
	</div>
</div>