<?php

session_start();
$_SESSION['name']='user';
include('conexion-php-calls/conexion-routapp.php');

?>

<!doctype html>
<html>
<head>
	<title>Routapp</title>

<!-- GOOGLE MAP META -->

	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
<!--  -->

	<meta charset="utf-8">
	<?php include ('php-calls/header.php'); ?>
	<link href="/stylesheets/ind-route-pro.css" media="screen, projection" rel="stylesheet" type="text/css" />

<!-- GOOGLE MAP BEGIN -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var barcelona = new google.maps.LatLng(41.3833,2.1833);
  var mapOptions = {
    zoom: 11,
    center: barcelona
  }

  var map = new google.maps.Map(document.getElementById('map-canvas-route-pro'), mapOptions);

  var ctaLayer = new google.maps.KmlLayer({
    url: 'http://a06.elisava.net/ikiMap_Routapp-Barcelona_Pe.kml?uwufwgffuwg'
  });
  ctaLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<!-- GOOGLE MAP END -->

</head>
<body>
<?php include('php-calls/top-menu.php') ?>
	
<div style="background-color:white; max-width:1200px; margin: 0 auto; padding-top:2%; padding-bottom:10%;">

	<?php include('routes-php-calls/single-route-pro.php');
	?>

  <div class="container" id="profile-comments">
    <?php include('routes-php-calls/comments-on-route.php'); ?>
  </div>

</div><!--background-white-->
</div>

<?php include ('php-calls/scripts.php');
		include ('php-calls/footer.php');
 ?>

<script type="text/javascript" src="js/perfil.js"></script>
</body>
</html>
