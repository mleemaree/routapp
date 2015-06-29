<?php 
session_start();
include('conexion-routapp.php');
$message="";

if(count($_POST)>0) {

$result = mysql_query("SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["userID"] = $row[userID];
$_SESSION["email"] = $row[email];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["userID"])) {
}

?>


		<form action="login.php" method="post">

			<p class="header"><b>Fill the following to login</b></p>



						<input class="login-input" type="text" name="email" placeholder="Email">			

						<input class="login-input" type="password" name="password" placeholder="Contraseña">				

      </div>
      <div class="modal-footer">
        <input type="submit" class="hvr-glow" value="Login">
      </form>

      <?php if($message!=""){
      	echo $message;
      
      }
      ?>




