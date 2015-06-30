<!doctype html>
<html>
<head>
	<title>RouteApp</title>
	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="stylesheets/tienda.css" media="screen, projection" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('php-calls/top-menu.php') ?>

<div class="container buy">
	<div class="row store-subtitle-wrapper">
		<div class="col-xs-12">
			<h2 id="store-subtitle">
				En nuestra tienda puedes adquirir créditos para comenzar a disfrutar 
				de todas nuestras rutas y planes de entrenamiento personalizados
			</h2>

			<hr>
		</div>
	</div>
	<div class="row buy-credits">
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-12">
					<span class="amount">100</span>
					<span class-"creditos">Créditos</span>
				</div>
			</div>
			<div class="row cost">
				<div class="col-xs-12">
					<span class="discounted-price">8,99€</span>
					<span class="actual-price">4,99€</span>
				</div>
			</div>
			<div class="row comprar">
				<div class="col-xs-10 col-xs-offset-1">
					<button type="button">COMPRAR</button>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-12">
					<span class="amount">200</span>
					<span class-"creditos">Créditos</span>
				</div>
			</div>
			<div class="row cost">
				<div class="col-xs-12">
					<span class="discounted-price">17,99€</span>
					<span class="actual-price">9,99€</span>
				</div>
			</div>
			<div class="row comprar">
				<div class="col-xs-10 col-xs-offset-1">
					<button type="button">COMPRAR</button>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="row">
				<div class="col-xs-12">
					<span class="amount">300</span>
					<span class-"creditos">Créditos</span>
				</div>
			</div>
			<div class="row cost">
				<div class="col-xs-12">
					<span class="discounted-price">29,99€</span>
					<span class="actual-price">14,99€</span>
				</div>
			</div>
			<div class="row comprar">
				<div class="col-xs-10 col-xs-offset-1">
					<button type="button">COMPRAR</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container invite-friends">
	<div class="row">
		<div class="col-xs-12">
			<img id="smiley" src="images/tienda/smiley.png">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="invite-friends-title">Puedes Conseguit créditos invitando a tus amigos a <strong>Routapp</strong></h2>
		</div>
	</div>
	<hr>
	<div class="row subtitle">
		<div class="col-xs-8 col-xs-offset-2">
			<p class="invite-friends-subtitle">
				Para que disfrutes con los tuyos, y por eso te damos 
				la oportunidad de invitar a 10 amigos. 
				Por cada amigo que invites recibirás 1 crédito.
			</p>
		</div>
	</div>
	<div class="row friend-email">
		<div class="col-xs-8 col-xs-offset-2">
			<span id="number-invitaciones">3</span><span>/10</span>
			<input type="text" name="email" placeholder="Introduce el correro electrónico de tu amigo">
		</div>
	</div>
	<div class="row enviar-button">
		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			<input type="submit" class="enviar" value="ENVIAR INVITACIÓN">
		</div>
	</div>
	<div class="row estado">
		<div class="col-xs-8 col-xs-offset-2">
			<span>Estado de las invitaciones</span>
		</div>
	</div>
	<div class="row person-estado">
		<div class="hidden-xs col-sm-2"></div>
		<div class="col-xs-1">
			<img src="images/tienda/hector.png">
		</div>
		<div class="col-xs-5">
			<span class="aceptada">Invitación aceptada por Hector73</span>
		</div>
		<div class="col-xs-1">
			<button type="button" class="resend"><img src="images/tienda/resend.png"></button>
		</div>
		<div class="col-xs-1">
			<button type="button" class="delete"><img src="images/tienda/delete.png"></button>
		</div>
		<div class="hidden-xs col-sm-2"></div>
	</div>
	<div class="row person-estado">
		<div class="hidden-xs col-sm-2"></div>
		<div class="col-xs-1">
			<img src="images/tienda/sergio.png">
		</div>
		<div class="col-xs-5">
			<span class="aceptada">Invitación aceptada por Sergio</span>
		</div>
		<div class="col-xs-1">
			<button type="button" class="resend"><img src="images/tienda/resend.png"></button>
		</div>
		<div class="col-xs-1">
			<button type="button" class="delete"><img src="images/tienda/delete.png"></button>
		</div>
		<div class="hidden-xs col-sm-2"></div>
	</div>
	<div class="row person-estado">
		<div class="hidden-xs col-sm-2"></div>
		<div class="col-xs-1">
			<img src="images/tienda/majo.png">
		</div>
		<div class="col-xs-5">
			<span class="aceptada">Invitación aceptada por majomajo@gmail.com</span>
		</div>
		<div class="col-xs-1">
			<button type="button" class="resend"><img src="images/tienda/resend.png"></button>
		</div>
		<div class="col-xs-1">
			<button type="button" class="delete"><img src="images/tienda/delete.png"></button>
		</div>
		<div class="hidden-xs col-sm-2"></div>
	</div>
</div>












<?php include ('php-calls/scripts.php'); ?>
</body>
</html>