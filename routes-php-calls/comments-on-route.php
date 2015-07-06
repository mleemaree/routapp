<?php

session_start();
$_SESSION['name']='user';
$_SESSION['name']='route';

?>

<p>				
	<select id="mis-rutas-filtro">
	<option>Filtrar Por</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	</select>
</p>



<?php

$sql="SELECT * FROM comments WHERE (routeID = '".$_GET['routeID']."') ORDER BY `comments`.`date` DESC";


			if ($result = $conexion->query($sql)) {
					$fila = $result->fetch_assoc(); 
			    	do  { 
			    			?>

			    			<p class="route-comment">

								<img style="height:50px; width:50px; border-radius:50%;" src="../register-php-calls/user_images/<?php echo $fila['avatar'];?>"><br>
								<?php echo $fila['title']; ?><br>
								<?php echo $fila['rating']; ?><br>
								<?php echo $fila['date']; ?><br><br>
								<?php echo $fila['content'];?><br>
							
							</p>
						
									<?php echo '<hr>';?>
							<?php    			

			    				} while ($fila = $result->fetch_assoc());
								$result->close();
				} 

			?>

			<p>
				Comentarios (<?php echo $_SESSION['route']['comments'];?>)

				<hr>
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




