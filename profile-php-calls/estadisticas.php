<!--<div class="purple"></div>-->

	<div class="row nivel-de-usuario">
		<div class="col-xs-12 col-sm-4 titles">
			<h2>NIVEL DE USUARIO</h2>
			<span id="nivel-title">Principiante Junior</span>
		</div>
		<div class="hidden-xs col-sm-8"></div>
	</div>
	<div class="row percentage">
		<div class="col-xs-12 col-sm-4">
			<div id="circle">
				<div class="nivel-percentaje">
					<p>NVL.<span id="nivel-number">5</span></p>
					<strong></strong>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8">
			<div class="rutas-completadas">
				<ul id="rutas-completadas">
					<li>
						<div class="row">
							<h3>Últimas rutas completadas:</h3>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-9">
								<span class="ejercicios-completadas">
									Correr por el parque del Retiro
								</span>
							</div>
							<div class="col-xs-3">
								<p class="points">+<span class="puntos">200</span>ptos.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-9">
								<span class="ejercicios-completadas">
									Abdominales y bicepts por Ciutadella
								</span>
							</div>
							<div class="col-xs-3">
								<p class="points">+<span class="puntos">200</span>ptos.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-9">
								<span class="ejercicios-completadas">
									Estiramientos al aire libre
								</span>
							</div>
							<div class="col-xs-3">
								<p class="points">+<span class="puntos">150</span>ptos.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div><!--row nivel usuario-->

	<div class="row estadisticas-menu">
		<ul class="estadisticas-menu-list nav nav-tabs nav-justified" style="padding:0;">
			<li class="active estadisticas-menu-option" id="esta-semana"><span>ESTA SEMANA</span></li>
			<li class="estadisticas-menu-option" id="ultimo-mes"><span>ÚLTIMO MES</span></li>
			<li class="estadisticas-menu-option" id="ultimo-6-meses"><span>ÚLTIMO 6 MESES</span></li>
			<li class="estadisticas-menu-option" id="ultimo-ano"><span>ÚLTIMO AÑO</span></li>
		</ul>
	</div>

	<div class="row recorrido">
		<div class="col-xs-12 col-sm-4">
			<h4 class="has">Has recorrido</h4>
			<div class="lower">
				<span class="pnum" id="distance-run">129,345</span>
				<p class="meas">KM</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8" id="equivalent">
			<ul class="compare">
				<li class="equal">
					<h4>Equivalencia:</h4>
				</li>
				<li>
					<p>Subir <span id="spire-state">339</span> veces el Spire State</p>
				</li>
				<li>
					<p>Correr el <span id="camino-santiago">26,32</span>% del Camino de Santiago.</p>
				</li>
				<li>
					<p>Rodear la tierra <span id="tierra">0,00010159</span> veces.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="row recorrido-graphic">
		<div class="hidden-xs col-sm-4"></div>
		<div class="col-xs-12 col-sm-8">
			<canvas id="myChart" width="800" height="400"></canvas>
		</div>
	</div>
	<div class="row quemado">
		<div class="col-xs-12 col-sm-4">
			<h4 class="has">Has quemado</h4>
			<div class="lower">
				<span class="pnum"id="calories-lost">37.000</span>
				<p class="meas">kCAL</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8" id="equivalent">
			<ul class="compare">
				<li class="equal">
					<h4>Equivalencia:</h4>
				</li>
				<li>
					<p><span id="big-mac">65</span> Big Macs.</p>
				</li>
				<li>
					<p><span id="manzanas">711</span> manzanas.</p>
				</li>
				<li>
					<p><span id="chocolate">61</span> onzas de chocolate.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="row entrenado">
		<div class="col-xs-12 col-sm-4">
			<h4 class="has">Has entrenado</h4>
			<div class="lower">
				<span class="pnum" id="training-hours">247</span>
				<p class="meas">HORAS</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8" id="equivalent">
			<ul class="compare">
				<li class="equal">
					<h4>Equivalencia:</h4>
				</li>
				<li>
					<p><span id="big-mac">10,29</span> días.</p>
				</li>
				<li>
					<p><span id="manzanas">711</span> viajes en avión Madrid-Pekin.</p>
				</li>
				<li>
					<p><span id="chocolate">247</span> siestas.</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="row descargar">
		<div class="col-xs-12">
			<button class="pull-right" type="button" id="descargar-estadisticas">Descargar Estadisticas</button>
		</div>
	</div>






