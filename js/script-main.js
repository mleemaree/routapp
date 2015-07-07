//------Filters Slide Down

$('#fdb').click(function(){
	$('#filters').slideDown('slow');
});


var handlers =[
	//on first click:
	function(){
			$('#filters').slideDown('slow');
	},
	//on second click:
	function(){
			$('#filters').slideUp('slow');
	}

];

var counter = 0;
$("#fdb").click(function() {
    // call the appropriate function preserving this and any arguments
    handlers[counter++].apply(this, Array.prototype.slice.apply(arguments));
    // "wrap around" when all handlers have been called
    counter %= handlers.length;
});



        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
