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

<div class="content-wrapper">

<div id="routes-list-pane-wrapper">
  <?php include('routes-php-calls/routes_list.php'); ?>
</div>

<div id="routes-map-pane-wrapper">
  <?php include('routes-php-calls/routes_map.php'); ?>
</div>













</div>

<?php include ('php-calls/scripts.php');
    include ('php-calls/footer.php');
 ?>
<script type="text/javascript" src="js/rutas.js"></script>
</body>
</html>