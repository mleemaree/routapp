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
      <a class="navbar-brand" href="#">routapp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Rutas <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Explora</a></li>
        <li><a href="#">BeTrainer</a></li>
        <li><a href="#">App</a></li>
        <li><a href="#">LOGIN</a></li>
        <li>
          <button type="button" class="btn btn-default"
          data-toggle="modal" data-target="#unete">Únete Gratis</button>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div id="unete" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title brand">routapp</h4>
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