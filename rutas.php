<!doctype html>
<html>
<head>
  <title>RouteApp</title>
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
        <li id="listado"><a href="#"><img src="images/listado.png"><span class="menu-name">Listado</span><span class="sr-only">(current)</span></a></li>
        <li id="mapa"><a href="#"><img src="images/mapa.png"><span class="menu-name">Mapa</span></a></li>
        <li class="dropdown pull-right" id="ordenar">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="menu-name">Ordenar vista por</span><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
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
<div class="content-wrapper">

<div class="container" style="margin-top:2%;">
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-10" style="">
      <?php include ('home-php-calls/featured-route.php'); ?>
		</div>
		<div class="col-xs-1"></div>
	</div>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-10" style="">
      <?php include ('home-php-calls/route-card.php'); ?>
		</div>
		<div class="col-xs-1"></div>
	</div>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-10" style="">
      <?php include ('home-php-calls/bought-route-card.php'); ?>
    </div>
		<div class="col-xs-1"></div>
	</div>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-10" style="">
      <?php include ('home-php-calls/route-card.php'); ?>
    </div>
		<div class="col-xs-1"></div>
	</div>
	<div class="row">
		<div class="col-xs-1"></div>
		<div class="col-xs-10" style="">
      <?php include ('home-php-calls/route-card.php'); ?>
    </div>
		<div class="col-xs-1"></div>
	</div>
  <div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10" style="">
      <?php include ('home-php-calls/bought-route-card.php'); ?>
    </div>
    <div class="col-xs-1"></div>
  </div>
  <div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10" style="">
      <?php include ('home-php-calls/bought-route-card.php'); ?>
    </div>
    <div class="col-xs-1"></div>
  </div>
  <div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10" style="">
      <?php include ('home-php-calls/route-card.php'); ?>
    </div>
    <div class="col-xs-1"></div>
  </div>
</div>


















</div>