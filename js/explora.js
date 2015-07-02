$('#barcelona-pin').click(function(){
	$('#explora-map').css('background-image','url("images/explora/explora-mapa-2.png")');
	$('#barcelona-pin').hide();
	$('#joan-pin').show();
});

$('#joan-pin').click(function(){
	$('#joan-pin').hide();
	$('#pop-up').show()
});

$('#pop-up').click(function(){
	$('#explora-zona-exercises-wrapper').show();
});