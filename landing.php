<?php
session_start();
$_SESSION['name']='user';

?>


<!doctype html>
<html>
<head>
	<title>Routapp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/landing.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid intro">
	<?php include('landing-php-calls/top-nav.php');?>
	<div class="row" id="title-content-wrapper">
		<div class="col-xs-2"></div>
		<div class="col-xs-8">
			<div class="title-wrapper">
				<h1 class="landing-title" id="title">LA CIUDAD ES TU GIMANSIO</h1>
			</div>
			<div class="title-content">
				<div class="subtitle">
					<div class="subtitle-wrapper">
						<h2 id="subtitle">Crear rutas y ejercicios para ponerte en forma</h2>
					</div>
				</div>
				<button class="landing-button" id="unete-gratis" type="button" data-keyboard="true"
          data-toggle="modal" data-target="#unete">
					<span>ÚNETE GRATIS</span>
				</button>
			</div>
		</div>
		<div class="col-xs-2"></div>
	</div>
</div>


<div class="content-wrapper">

<div class="container-fluid crea">
	<div class="row">
		<div class="col-xs-12 col-sm-6 info">
			<div class="crea-title-wrapper">
				<h3 class="title landing-title" id="crea-title">CREA TUS PROPIAS RUTAS Y EJERCICIOS</h3>
			</div>
			<div class="crea-list-wrapper">
				<div class="row">
					<div class="hidden-xs col-sm-4"></div>
					<div class="col-xs-12 col-sm-8">
						<ul class="crea-list">
							<li>
								<img style="float:left;" src="">
								<p>Crea rutas con nuestro potente gestor.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/pinmap_landing.png">
								<p>Añade zonas de la ciudad donde ejercitarte.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland5.png">
								<p>Configura y crea completos ejercicios.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland4.png">
								<p>Comparte las rutas con otros usuarios.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland6.png">
								<p>Controla y gestiona todus tus estadisticas.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<button class="landing-button" id="crear-rutas" type="button">
				<span>¡CREAR RUTAS YA!</span>
			</button>
		</div>
		<div class="col-xs-12 col-sm-7 crea-picture-wrapper">
			<div class="crea-position">
				<!--<img class="img-responsive landing-foto pull-right" id="crea-picture" src="images/landing/crea-img.png">-->
			</div>
		</div>
	</div>
</div>

<div class="container-fluid ciudad">
	<div class="row">
		<div class="col-xs-12 col-sm-6 ciudad-picture-wrapper">
			<img class="img-responsive landing-foto" id="ciudad-picture" src="images/landing/strong-guy.png">
		</div>
		<div class="col-xs-12 col-sm-6 info">
			<div class="ciudad-title-wrapper">
				<h3 class="title landing-title" id="ciudad-title">LA CIUDAD ES TU GIMNASIO, Y ES GRATIS</h3>
			</div>
			<div class="ciudad-list-wrapper">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<ul class="ciudad-list">
							<li>
								<p class="sub sub-ciudad">Practica tu ciudad de una manera diferente</p>
							</li>
							<li>
								<p>Descubre y añade zonas para ejercitarte</p>
								<im style="float:left;"g src="images/landing/pinmap_landing.png">
							</li>
							<li>
								<p>Realiza clientos de ejercicios al aire libre</p>
								<im style="float:left;"g src="images/landing/icoland5.png">
							</li>
							<li>
								<p>Sigue entrenamientos personalizados</p>
								<im style="float:left;"g src="images/landing/icoland3.png">
							</li>
							<li>
								<p>Monitoriza y comparte tus progresos</p>
								<im style="float:left;"g src="">
							</li>
						</ul>
					</div>
					<div class="hidden-xs col-sm-4"></div>
				</div>
			</div>
			<button class="landing-button" id="crea-perfil" type="button">
				<span>¡QUIERO UNIRME YA!</span>
			</button>
		</div>
	</div>
</div>

<div class="container-fluid trainer">
	<div class="row trainer-row">
		<div class="col-xs-12 col-sm-6 info">
			<div class="trainer-title-wrapper">
				<h3 class="title landing-title" id="trainer-title">ENTRENA Y GANA CON "BE A TRAINER"</h3>
			</div>
			<div class="trainer-list-wrapper">
				<div class="row">
					<div class="hidden-xs col-sm-4"></div>
					<div class="col-xs-12 col-sm-8">
						<ul class="trainer-list">
							<li>
								<p class="sub-left">Si eres un profesional del mundo del deporte, puedes veneficiarte de las ventajas de nuestro perfil "BE A TRAINER"</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland2.png">
								<p>Promociona tu trabajo como profesional.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland5.png">
								<p>Crea rutinas de entrenamientos y ejercicios.</p>
							</li>
							<li>
								<img style="float:left;" src="">
								<p>Genera beneficios a través de tus rutinas.</p>
							</li>
							<li>
								<img style="float:left;" src="images/landing/icoland6.png">
								<p>Monitoriza a tus principales usuarios.</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<button type="button" id="crear-perfil" class="btn btn-default landing-button"
          data-toggle="modal" data-target="#unete">
				<span>CREAR PERFIL "BE A TRAINER"</span>
			</button>
		</div>
		<div class="col-xs-12 col-sm-6 trainer-picture-wrapper">
			<!--<img class="img-responsive landing-foto" id="trainer-picture" src="images/landing/trainers.png">-->
		</div>
	</div>
</div>

<div class="container-fluid descarga">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<img class="img-responsive landing-foto" id="devices-picture" src="images/landing/devices.png">
		</div>
		<div class="col-xs-12 col-sm-6 info">
			<div class="descarga-title-wrapper">
				<h3 class="title landing-title" id="descarga-title">DESCARGA NUESTRA APLICACIÓN</h3>
			</div>
			<div class="descarga-wrapper">
				<p class="sub">Sáca el máximo partido a cada uno de tus entrenamientos con nuestra aplicación
			</div>
			<button class="landing-button" id="descarga" type="button">
					<span>DESCARGAR LA APLICACIÓN</span>
			</button>
		</div>
	</div>
</div>




</div><!--content-wrapper-->







<?php include ('php-calls/scripts.php');

include ('php-calls/footer.php');



 ?>


</body>
</html>