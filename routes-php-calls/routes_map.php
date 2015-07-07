<div class="container">
	<div class="row">
		<div class="hidden-xs col-sm-4 mapa-route-card-list">
			<?php

if ($result = $conexion->query($sql)) {
		$fila = $result->fetch_assoc(); 
    	do  { 

    		if ($fila['username'] == "routapp") {

    			?>
		<a href="ind-route-pro.php?routeID=<?php echo $fila['routeID']; ?>">
			<div class="mapa-bought-card">
				<div class="row not">
					<div class="col-xs-12 map-bought-card-title">
						<h3 class="mapa-bought-card-title"><?php echo $fila['title']; ?></h3>
					</div>
				</div>
				<div class="row not">
					<div class="col-xs-12 map-bought-card-subtitle">
						<h3 class="mapa-bought-card-title"><?php echo $fila['subtitle']; ?></h3>
					</div>
				</div>
				<div class="row mapa-bought-metrics">
					<div class="col-xs-4" >
						<span id="mapa-bought-card-distance" style="float:none;"><?php echo $fila['distance'];?></span>
					</div>
					<div class="col-xs-4" style="text-align:left;">
						<span id="mapa-bought-card-calories"><?php echo $fila['calories'];?></span>
					</div>
					<div class="col-xs-4" style="text-align:left;"> 
						<span id="mapa-bought-card-exerciseNum"><?php echo $fila['exerciseNum'];?></span>
					</div>
				</div>
			</div>
		</a>



						<?php echo '<hr>';?>
				<?php    			
    		}

    		else{
    			?>

		<a href="ind-route-user.php?routeID=<?php echo $fila['routeID']; ?>">
    		<div class="mapa-user-card">
    			<div class="row its">
    				<div class="col-xs-12 map-user-card-title">
    					<h3 class="mapa-user-card-title"><?php echo $fila['title']; ?></h3>
    				</div>
    			</div>
				<div class="row its">
					<div class="col-xs-12 rating-wrapper">
						<img src="images/iconos/rating.png">
					</div>
				</div>
				<div class="row mapa-user-card-metrics">
					<div class="col-xs-4 ind-metric">
						<img src="../images/shoe.png">
						<span class="met-num" id="mapa-user-card-distance"><?php echo $fila['distance'];?></span>
						<p class="mapa-user-card-info">Km</p>
					</div>
					<div class="col-xs-4 ind-metric">
						<img src="../images/fire.png">
						<span class="met-num" id="mapa-user-card-vcal"><?php echo $fila['calories'];?></span>
						<p class="mapa-user-card-info">KCal</p>
					</div>
					<div class="col-xs-4 ind-metric">
						<img src="../images/arm.png">
						<span class="met-num" id="mapa-user-card-distance"><?php echo $fila['exerciseNum'];?></span>
						<p class="mapa-user-card-info">Ejercicios</p>
					</div>
				</div>
			</div>
		</a>


		    	<?php

		    }

    				} while ($fila = $result->fetch_assoc());
					$result->close();
				} 


				?>	
		</div>



<!-- GOOGLE MAP

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var barcelona = new google.maps.LatLng(41.3833,2.1833);
  var mapOptions = {
    zoom: 11,
    center: barcelona
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var ctaLayer = new google.maps.KmlLayer({
    url: 'http://a06.elisava.net/ikiMap_Routapp-Barcelona_Pe.kml?uwufwgffuwg'
  });
  ctaLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

-->


		<div class="col-xs-12 col-sm-8">
			<img src="images/mapa-mapa.png">
		</div>
	</div>
</div>













