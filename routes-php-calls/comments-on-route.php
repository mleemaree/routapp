<?php

session_start();
$_SESSION['name']='user';
$_SESSION['name']='route';

include('conexion-routapp.php');

$sql="SELECT * FROM comments WHERE (routeID = '17') ORDER BY `comments`.`date` DESC";

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

   <title> Routes list </title>

</head>
<body>

<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 
    			?>

    			<p class="bought-route-card">

						<img src="user_images/<?php echo $fila['avatar'];?>"><br>
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


</body>
</html>

