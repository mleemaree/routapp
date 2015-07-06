<?php

session_start();
$_SESSION['name']='user';
$_SESSION['name']='route';

?>



 <div class="container" id="profile-comments">
	<div class="row comment-title">
		<div class="col-xs-10">
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
	<div class="row comment-options">
		<div class="col-xs-12 col-sm-6 pull-right">
			<div class="row">
				<div class="col-xs-7">
					<p>Denunciar contenido inapropiado</p>
					<img alt="denunciar" src="images/iconos/denunciar.png">
				</div>
				<div class="col-xs-3">
					<p>Ver respuestas</p>
					<img alt="ver" src="images/iconos/ver.png">
				</div>
				<div class="col-xs-2">
					<p>Responder</p>
					<img alt="responder" src="images/iconos/responder.png">
				</div>
			</div>
		</div>
	</div>
<hr>
			    			
							<?php    			

			    				} while ($fila = $result->fetch_assoc());
								$result->close();
				} 

			?>

				¿Que te ha parecido la ruta? ¿Te ha gustado? Tu opinion es importante para nosotros y la comunidad de Routapp!

			</p>



			<form action="register-php-calls/comment-register.php?routeID=<?php echo $_GET['routeID']?>&username=<?php echo $_GET['username']?>" method="post" enctype="multipart/form-data">

			<ul>

				<li>
					<p>Valora la ruta <img src="images/stars.png"></p>
				</li>
				<li>
					<label for="title">Titulo</label>
					<input type="text" name="title">
				</li>
				<li>
					<textarea name="content"></textarea>
				</li>
			</ul>


			<input type="submit" value="Guardar">

			</form>

</div>


