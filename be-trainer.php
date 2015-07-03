<!doctype html>
<html>
<head>
	<title>Routapp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/landing.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="container-fluid nav-wrapper">
			<?php include('landing-php-calls/top-nav.php');?>
	</div>
	<div class="container">
		<div class="row" style="padding-bottom:10%;">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1">
				<div class="row trainer-img">
					<img id="trainers" src="images/trainer/trainers.png">
				</div>
					<div class="row trainer-title">
						<h2>BeTrainer</h2>
					</div>
					<div class="row round">
					<div class="row titler">
						<div class="col-xs-12 eres-title">
							<h3>Si eres un profesional del deporte y quieres 
								sacar partido de tus conocimientos <strong>"BeTrainer"</strong>
								es tu perfil.</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-7 bt-puntos-wrapper">
							<h4 class="subtitles">¿Qué ventajas tiene el perfil BeTrainer?</h4>
							<ul class="bt-puntos">
								<li>Promociona tu trabajo como profesional en cualquier lugar.</li>
								<li>Crea entrenamientos y ejercicios y saca beneficio por ellos.</li>
								<li>Consigue una cartera de potenciales clientes.</li>
								<li>Genera, gestiona y planifica clases presenciales en tu ciudad.</li>
								<li>Analiza el impacto de tus rutas en los usuarios.</li>
								<li>Y lo mejor de todo, el perfil “BeTrainer” es totalente gratuito.</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-5">
							<h4 class="subtitles">Envianos tu solicitud</h4>
							<input type="text" class="email" placeholder="Cuenta de correo">
							<p class="add">Adjunta un archivo</p>
							<input type="file" id="bt-archivo">
							<button id="esol" type="submit">ENVIAR SOLICITUD</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
















<?php include ('php-calls/scripts.php');
		include ('php-calls/footer.php');
 ?>
<script type="text/javascript" src="js/mis-rutas.js"></script>
</body>
</html>