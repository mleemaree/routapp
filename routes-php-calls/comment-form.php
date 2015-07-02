<?php
session_start();
$_SESSION['name']='route';
$_SESSION['name']='user';


echo $_SESSION['user']['username'];
echo $_SESSION['user']['avatar'];
echo $_SESSION['route']['routeID'];

?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8">

</head>

</head>

<body>

<form action="comment-register.php" method="post" enctype="multipart/form-data">

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



</body>
</html>

