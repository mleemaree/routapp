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



//--progress

$('#estadisticas').click(function(){

$('#circle').circleProgress({
	fill: {color:'#d1005d'},
    value: 0.75,
    size: 190,
    startAngle: 6.3,
    thickness: 20
}).on('circle-animation-progress', function(event, progress, stepValue) {
    $(this).find('strong').text(String(stepValue.toFixed(2)).substr(1)*100 + '%');
});


});


//--chart

var ctx = document.getElementById("#myChart").getContext("2d");

$('#estadisticas').click(function(){


var data = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};

var ctx = document.getElementById("myChart").getContext("2d");

});