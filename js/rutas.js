$('#listado').click(function(){
	$('#routes-list-pane-wrapper').show();
	$('#routes-map-pane-wrapper').hide();
});

$('#mapa').click(function(){
	$('#routes-list-pane-wrapper').hide();
	$('#routes-map-pane-wrapper').show();
});