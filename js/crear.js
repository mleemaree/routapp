
$(window).load(function(){
    $('#crear-pref').modal('show');
});

$('#guardar-crear-traz').click(function(){
	$('#crear-ruta-char').modal('show');
});

$('#lapiz').click(function(){
	$('#trazado').show();
});

$('#lapiz-zone').click(function(){
	$('#zone').show();
});


$('.delete').click(function(){
	$('#trazado').hide();
	$('#zone').hide();
});





$('#crear-char-submit').click(function(){
	$('#add-zone-wrapper').show();
	$('html, body').animate({scrollTop: $(".zones").offset().top}, 800);
});
