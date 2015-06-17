<nav class="navbar navbar-inverse nav-justified blue" style="margin-bottom:0;">
  <div class="container-fluid" style="margin: 0.5% auto;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header left">
      <a class="navbar-brand" href="#">routapp</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav middle">
        <li class="active"><a href="#">Rutas <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Explora</a></li>
        <li><a href="#">App</a></li><li>
        <li><a href="#">Tienda</a></li>
        <li>
        	<a class="btn btn-default" href="#">Crear Ruta</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right right">
        <img id="userPhoto" class="pull-right" src="images/alejandro.png">
        <li id="userName" class="pull-right"><a href="#">Alejandro</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<nav class="navbar navbar-default bottom">
  <div class="container-fluid" style="padding:0;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="display:inline-block;">
      <?php include ('php-calls/filtros.php'); ?> 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse bottom-nav" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="bottom-bar">
        <li class="active"><a href="#"><img src="images/listado.png"><span class="menu-name">Listado</span><span class="sr-only">(current)</span></a></li>
        <li><a href="#"><img src="images/mapa.png"><span class="menu-name">Mapa</span></a></li>
        <li><a href="#"><div class="hide"><img src="images/mapa.png"><span class="menu-name">Mapa</span></div></a></li>
        <li class="dropdown pull-right">
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

<div class="screw">
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
</div>


















</div>