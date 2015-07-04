<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding:0;" href="landing.php"><img src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right nav-justified">
        <li><a href="be-trainer.php">BeTrainer</a></li>
        <li><a href="app.php">App</a></li>
        <li>
          <a class="login-button" style="padding-top:9px;"
            data-toggle="modal" data-keyboard="true" data-target="#login">
            <img style="float:left;"src="images/login-icon.png"> 
            <p style="float:right; line-height:2;">Login</p>
          </a>
        </li>
        <li style="margin-left:4%; margin-top:0.5%;">
          <button type="button" class="btn btn-default unete-button" data-keyboard="true"
          data-toggle="modal" data-target="#unete">Únete Gratis</button>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div id="unete" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title brand"><img src="images/logo.png"></h4>
      </div>
      <div class="modal-body">
        <?php include('register-php-calls/register_form.php'); ?>
      </div>
      <div class="modal-footer">
        <input type="submit" class="hvr-glow" value="¡VAMOS A POR ELLO!">
      </form>
      </div>
    </div>

  </div>
</div>

<div id="login" class="modal fade" role="dialog" tabindex="-1">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title brand"><img src="images/logo.png"></h4>
      </div>
      <div class="modal-body">
        <?php include('register-php-calls/index-routapp.php'); ?>
      </div>
    </div>

  </div>
</div>

