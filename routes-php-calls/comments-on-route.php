<?php

session_start();
$_SESSION['name']='user';
$_SESSION['name']='route';


$sql="SELECT * FROM comments WHERE (routeID = '".$_GET['routeID']."') ORDER BY `comments`.`date` DESC";


			if ($result = $conexion->query($sql)) {
					$fila = $result->fetch_assoc(); 
			    	do  { 
			    			?>

			    			<p class="route-comment">

								<img src="../register-php-calls/user_images/<?php echo $fila['avatar'];?>"><br>
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


			<form action="register-php-calls/comment-register.php?routeID=<?php echo $_GET['routeID']?>&username=<?php echo $_GET['username']?>" method="post" enctype="multipart/form-data">

			<ul>
				<li>
					<label for="title">title</label>
					<input type="text" name="title">
				</li>
				<li>
					<textarea name="content"></textarea>
				</li>
			</ul>


			<input type="submit" value="Guardar">

			</form>




