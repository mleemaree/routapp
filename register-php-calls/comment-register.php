<?php
include('../conexion-php-calls/conexion-routapp.php');

session_start();
$_SESSION['name']='route';
$_SESSION['name']='user';

$routeIDcommentario=$_GET['routeID'];

if (($_POST['content'])== null or ($_POST['title'])==null) { 

		?>

		<script> alert ("Tienes que rellenar todos los campos"); window.history.back(); </script>

		<?php
			

		}

		else if (isset($_POST['content'])==true and isset($_POST['title'])==true) {

			// Protect against SQL injection
			$content = $conexion->escape_string($_POST['content']);
			$routeID = $conexion->escape_string($_SESSION['route']['routeID']);
			$username = $conexion->escape_string($_SESSION['user']['username']);
			$avatar = $conexion->escape_string($_SESSION['user']['avatar']);
			$title = $conexion->escape_string($_POST['title']);

			// Execute queries
			$conexion->query("SET foreign_key_checks=0");
			$conexion->query("INSERT INTO comments (content, routeID, username, avatar, title, date) VALUES ('$content', '".$routeIDcommentario."', '$username', '$avatar', '$title', now())");

			$_SESSION['route']['comments']=$_SESSION['route']['comments']+1;

			$conexion->query("UPDATE routes SET comments= '".$_SESSION['route']['comments']."' where routeID='".$routeIDcommentario."'");


				if ($_GET['username']=='routapp') {

						?>

					<script> alert ("Gracias por su comentario!"); window.location="../ind-route-pro.php?routeID=<?php echo $routeIDcommentario?>"; </script>

					<?php
					}
					else {
						
					?>

					<script> alert ("Gracias por su comentario!"); window.location="../ind-route-user.php?routeID=<?php echo $routeIDcommentario?>"; </script>
					<?php
					}



} else { echo "Oops! Something went wrong...";

} ?>


