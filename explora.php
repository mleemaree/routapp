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
</head>
<body>
  
<?php include('php-calls/top-menu.php'); ?>


<nav class="navbar navbar-default bottom">
  <div class="container-fluid" style="padding:0;">
    <!-- Brand and toggle get grouped for better mobile display -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="nav navbar-default bottom-nav" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav" id="bottom-bar">
        <li id="fdb">
          <a href="#"><img src="images/filtros.png"><span class="menu-name">Filtro de Busqueda</span></a>
        </li>
        <li id="listado"><a href="rutas.php"><img src="images/listado.png"><span class="menu-name">Listado</span><span class="sr-only">(current)</span></a></li>
        <li id="mapa"><a href="#"><img src="images/mapa.png"><span class="menu-name">Mapa</span></a></li>
        <li class="dropdown pull-right" id="ordenar">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-name">Ordenar vista por</span><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="landing.php">Landing</a></li>
            <li><a href="profile-php-calls/user_profile.php">User Profile</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="screw" id="filters">
  <?php include ('php-calls/filtros-sin-nav.php'); ?>
</div>

<div class="content-wrapper" style="background-color:#fff; height:100%; max-width:1200px; margin: 0 auto;">



<div class="container">
  <div class="row explora-subtitle">
    <h2>No tienes tiempo para ir al gimnasio? ¿Viajas continuamente y quieres estar en forma?</h2>
    <h2>¿Te gustaría disfrutar de la ciudad de una forma diferente? ¿A qué esperas?</h2>
    <strong>¡La Ciudad es tu gimnasio!</strong>
  </div>
</div>

<div class="container explora-map">
  <div class="row">
    <div class="hidden-xs col-sm-3">
      <div class="hint">
        <div class="hint-title">
          <img src="images/iconos/plus-white.png">
          <h4>Añade una zona</h4>
        </div>
        <div class="hint-body">
          <p>Suelta el icono en el lugar deseado del mapa</p>
          <img src="images/iconos/hint-icono.png">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="explora-busqueda-wrapper">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="¿Dónde estás ahora?">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">BUSCAR</button>
          </span>
        </div>
      </div>
    </div>
    <div class="hidden-xs col-sm-3"></div>
  </div>
  <img id="barcelona-pin" src="images/explora/barcelona-pin.png">
</div>
<div class="container zones" style="margin:0; width:100%;">
  <?php include('explora-php-calls/zones-explora.php'); ?>
</div>
<div class="container zones-explora-add-form" style="margin:0; width:100%;">
  <?php include('explora-php-calls/zones-explora-add-form.php'); ?>
</div>





</div>




<?php include ('php-calls/scripts.php'); ?>

</body>
</html>