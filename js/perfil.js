//Mi perfile panes-------

$('#estadisticas').click(function(){
	$('#estadisticas-profile').show();
	$('#mis-rutas-profile').hide();
	$('#creditos-profile').hide();
	$('#informacion-profile').hide();
});

$('#mis-rutas').click(function(){
	$('#estadisticas-profile').hide();
	$('#mis-rutas-profile').show();
	$('#creditos-profile').hide();
	$('#informacion-profile').hide();
});

$('#creditos').click(function(){
	$('#estadisticas-profile').hide();
	$('#mis-rutas-profile').hide();
	$('#creditos-profile').show();
	$('#informacion-profile').hide();
});

$('#informacion').click(function(){
	$('#estadisticas-profile').hide();
	$('#mis-rutas-profile').hide();
	$('#creditos-profile').hide();
	$('#informacion-profile').show();
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
