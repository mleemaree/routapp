<?php

session_start();
$_SESSION['name']='user';
$_SESSION['name']='route';

?>



 <div class="container" id="profile-comments">
	<div class="row comment-title">
		<div class="col-xs-10 comment-title-wrapper">
			<h3>Comentarios (<?php echo $_SESSION['route']['comments'];?>)</h3>
		</div>
		<div class="col-xs-2">
			<select id="mis-rutas-filtro">
				<option>Filtrar Por</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
		</div>
	</div>


<?php

$sql="SELECT * FROM comments WHERE (routeID = '".$_GET['routeID']."') ORDER BY `comments`.`date` DESC";


			if ($result = $conexion->query($sql)) {
					$fila = $result->fetch_assoc(); 
			    	do  { 
			    			?>

	<div class="row comment-date">
		<div class="col-xs-12 date">
			<?php echo $fila['date']; ?>
		</div>
	</div>
	<div class="row comment">
		<div class="col-xs-12 col-sm-3">
			<img class="comment-img" src="../register-php-calls/user_images/<?php echo $fila['avatar'];?>">
		</div>
		<div class="col-xs-12 col-sm-8">
			<div class="row titler-rating">
				<div class="col-xs-12">
					<?php echo $fila['title']; ?>
					<img alt="comment-rating" src="images/iconos/rating.png">
				</div>
			</div>
			<div class="row content">
				<?php echo $fila['content'];?>
			</div>
		</div>
	</div>
	<div class="hidden-xs col-sm-1"></div>
	
<hr>
			    			
							<?php    			

			    				} while ($fila = $result->fetch_assoc());
								$result->close();
				} 

			?>


	<div class="row make-comment">
		<div class="row make-comment-title">
			<div class="col-xs-12">
				<h4 style="text-align:center; font-weight:bold;">¿Que te ha parecido la ruta? ¿Te ha gustado? Tu opinion es importante para nosotros y la comunidad de Routapp!</h4>
			</div>
		</div>
		<form action="register-php-calls/comment-register.php?routeID=<?php echo $_GET['routeID']?>&username=<?php echo $_GET['username']?>" method="post" enctype="multipart/form-data">
		<div class="row new-comment-title">
			<div class="col-xs-12 col-sm-4 tit-row">
				<label for="title">Titulo</label>
			</div>
			<div class="col-xs-12 col-sm-4 tit-row">
				<input class="new-comment-titled" type="text" name="title">
			</div>
			<div class="col-xs-12 col-sm-4 tit-row">
				<h4>Valora la ruta <img class="comment-rating"src="images/stars.png"></h4>
			</div>
		</div>
		<div class="row comment-input">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<textarea class="new-comment-text" class="comment-text" name="content"></textarea>
			</div>
		</div>
		<div class="row comment-submit">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 button-wrapper">
				<input class="new-comment-submit" type="submit" value="Guardar">
			</div>
		</div>
	</form>
	</div>

			





</div>


