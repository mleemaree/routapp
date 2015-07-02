<nav class="navbar navbar-default navbar-inverse blue" style="margin-bottom:0; z-index:100">
  <div class="container-fluid" style="margin:0.5% auto; height:65px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header left">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">routapp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav middle">
        <li class="active"><a href="index.php">Rutas <span class="sr-only">(current)</span></a></li>
        <li><a href="explora.php">Explora</a></li>
        <li><a href="app.php">App</a></li><li>
        <li><a href="tienda.php">Tienda</a></li>
        <li>
          <a class="btn btn-default" href="crear.php">
            <span style="position:relative; top:-2.5px;">Crear Ruta</span>
          </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <div class="signed-in-user">
      <ul class="nav navbar-nav navbar-right right dropdown user-info-small">
        <img id="userPhoto" class="pull-right" src="register-php-calls/user_images/<?php echo $_SESSION['user']['avatar']?>">
        <a href="#" class="dropdown-toggle" id="logged-user-name" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="menu-name"></span>
          <span class="caret"></span>
          <span id="user-name"><?php echo $_SESSION['user']['username']; ?></span>
        </a>
        <ul class="dropdown-menu" id="user-dropdown-menu" role="menu">
            <li><a href="../profile.php" class="dropdown-top">Perfil de Usuario</a></li>
            <li class="divider"></li>
            <li><a href="profile.php" class="dropdown-top">Mis Rutas</a></li>
            <li class="divider"></li>
            <li><a href="register-php-calls/logout.php" class="dropdown-top">Cerar Sesión</a></li>
          </ul>
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>
