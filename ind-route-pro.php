<?php

session_start();
$_SESSION['name']='user';
include('conexion-php-calls/conexion-routapp.php');

?>

<!doctype html>
<html>
<head>
	<title>Routapp</title>

	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/ind-route-pro.css" media="screen, projection" rel="stylesheet" type="text/css" />

</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	
<div style="background-color:white; max-width:1200px; margin: 0 auto; padding-top:2%; padding-bottom:10%;">

		<?php include('routes-php-calls/single-route-pro.php');?>


  <div class="container" id="route-com">
    <?php include('routes-php-calls/comments-on-route.php'); ?>
  </div>
  <div class="container">
  	<div class="row">
  		<div class="col-xs-12" style="text-align:center; padding-top:5%;	">
  			<input type="button" class="descargar-ruta" value="Descargar la Ruta" 
  			data-toggle="modal" data-target="#descargar-ruta">
  		</div>
  	</div>
  </div>



  <div class="modal fade" id="descargar-ruta" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header descargar-mg">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Estás a punto de comprar la ruta</h4>
        </div>
        <div class="modal-body">
          <div class="row" style="padding:2% 0;">
          	<div class="col-xs-5">
          		<p>Crédito disponible:</p>
          	</div>
          	<div class="col-xs-7">
          		<p style="color:red;"><span style="font-weight:bold;" class="credit-num">5</span> Saldo de créditos insuficiente</p>
          	</div>
          </div>
          <div class="row">
          	<div class="col-xs-5">
          		<p>Coste de la ruta:</p>
          	</div>
          	<div class="col-xs-7">
          		<span style="font-weight:bold;" class="route-cost">10</span>
          	</div>
          </div>
        </div>
        <div class="modal-footer" style="text-align:center; border:none;">
          <button type="button" class="btn descargar-ruta-button btn-default" data-dismiss="modal">Comprar creditos</button>
        </div>
      </div>
      
    </div>
  </div>

</div><!--background-white-->
</div>

<?php include ('php-calls/scripts.php');
		include ('php-calls/footer.php');
 ?>

<script type="text/javascript" src="js/rutas.js"></script>
</body>
</html>
