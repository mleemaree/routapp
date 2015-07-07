$('#info-ruta-com').click(function(){
	$('#route-info').hide();
	$('#route-com').show();
});

$('#listado').click(function(){
	$('#routes-list-pane-wrapper').show();
	$('#routes-map-pane-wrapper').hide();
});

$('#mapa').click(function(){
	$('#routes-list-pane-wrapper').hide();
	$('#routes-map-pane-wrapper').show();
});


$('#info-ruta-desc').click(function(){
	$('#route-info').show();
	$('#route-com').hide();
  $('#info-ruta-desc').addClass('active');
  $('#info-ruta-com').removeClass('active');
});

$('#info-ruta-com').click(function(){
  $('#info-ruta-com').addClass('active');
  $('#info-ruta-desc').removeClass('active');
});



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