//Mi perfile panes-------

$('#estadisticas').click(function(){
	$('#estadisticas-profile').hide();
	$('#mis-rutas-profile').hide();
});

//----Mis Rutas Panes

$('#mis-rutas-creadas').click(function(){
	$('#mis-rutas-creadas-pane-wrapper').show();
	$('#mis-rutas-favoritas-pane-wrapper').hide();
	$('#mis-rutas-compradas-pane-wrapper').hide();
});

$('#mis-rutas-favoritas').click(function(){
	$('#mis-rutas-favoritas-pane-wrapper').show();
	$('#mis-rutas-creadas-pane-wrapper').hide();
	$('#mis-rutas-compradas-pane-wrapper').hide();
});

$('#mis-rutas-compradas').click(function(){
	$('#mis-rutas-compradas-pane-wrapper').show();
	$('#mis-rutas-creadas-pane-wrapper').hide();
	$('#mis-rutas-favoritas-pane-wrapper').hide();
});
