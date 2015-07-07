//Mi perfile panes-------

$('#estadisticas').click(function(){
	$('#estadisticas-profile').show();
	$('#creditos-profile, #informacion-profile, #mis-rutas-profile').hide();
});

$('#mis-rutas').click(function(){
	$('#estadisticas-profile, #informacion-profile, #creditos-profile').hide();
	$('#mis-rutas-profile').show();
});

$('#creditos').click(function(){
	$('#mis-rutas-profile, #estadisticas-profile, #informacion-profile').hide();
	$('#creditos-profile').show();
});

$('#informacion').click(function(){
	$('#estadisticas-profile, #creditos-profile, #mis-rutas-profile').hide();
	$('#informacion-profile').show();
});



//---Mis Rutas Menu

$('#mis-rutas').click(function(){
  $('#mis-rutas').addClass('active');
  $('#estadisticas, #creditos, #informacion').removeClass('active');
});

$('#estadisticas').click(function(){
  $('#estadisticas').addClass('active');
  $('#mis-rutas, #creditos, #informacion').removeClass('active');
});

$('#creditos').click(function(){
  $('#creditos').addClass('active');
  $('#estadisticas, #mis-rutas, #informacion').removeClass('active');
});

$('#informacion').click(function(){
  $('#informacion').addClass('active');
  $('#estadisticas, #creditos, #mis-rutas').removeClass('active');
});

//----Mis Rutas Panes

$('#mis-rutas-creadas').click(function(){
	$('#mis-rutas-creadas-pane-wrapper').show();
	$('#mis-rutas-favoritas-pane-wrapper, #mis-rutas-compradas-pane-wrapper').hide();
});

$('#mis-rutas-favoritas').click(function(){
	$('#mis-rutas-favoritas-pane-wrapper').show();
	$('#mis-rutas-creadas-pane-wrapper, #mis-rutas-compradas-pane-wrapper').hide();
});

$('#mis-rutas-compradas').click(function(){
	$('#mis-rutas-compradas-pane-wrapper').show();
	$('#mis-rutas-creadas-pane-wrapper, #mis-rutas-favoritas-pane-wrapper').hide();
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



var chart = new Chartist.Line('.ct-chart', {
  labels: ['sem 1', 'sem 2', 'sem 3', 'sem 4', 'sem 5'],
  series: [
    [4, 5, 3, 2, 3]
  ]
}, {
     high: 5,
      lineSmooth: Chartist.Interpolation.none(),
  low: 0,
  fullWidth: true,
  // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
  axisY: {
    onlyInteger: true,
    offset: 20
  }
});

// Let's put a sequence number aside so we can use it in the event callbacks
var seq = 0,
  delays = 80,
  durations = 500;

// Once the chart is fully created we reset the sequence
chart.on('created', function() {
  seq = 0;
});

// On each drawn element by Chartist we use the Chartist.Svg API to trigger SMIL animations
chart.on('draw', function(data) {
  seq++;

  if(data.type === 'line') {
    // If the drawn element is a line we do a simple opacity fade in. This could also be achieved using CSS3 animations.
    data.element.animate({
      opacity: {
        // The delay when we like to start the animation
        begin: seq * delays + 1000,
        // Duration of the animation
        dur: durations,
        // The value where the animation should start
        from: 0,
        // The value where it should end
        to: 1
      }
    });
  } else if(data.type === 'label' && data.axis === 'x') {
    data.element.animate({
      y: {
        begin: seq * delays,
        dur: durations,
        from: data.y + 100,
        to: data.y,
        // We can specify an easing function from Chartist.Svg.Easing
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'label' && data.axis === 'y') {
    data.element.animate({
      x: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 100,
        to: data.x,
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'point') {
    data.element.animate({
      x1: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutQuart'
      },
      x2: {
        begin: seq * delays,
        dur: durations,
        from: data.x - 10,
        to: data.x,
        easing: 'easeOutQuart'
      },
      opacity: {
        begin: seq * delays,
        dur: durations,
        from: 0,
        to: 1,
        easing: 'easeOutQuart'
      }
    });
  } else if(data.type === 'grid') {
    // Using data.axis we get x or y which we can use to construct our animation definition objects
    var pos1Animation = {
      begin: seq * delays,
      dur: durations,
      from: data[data.axis.units.pos + '1'] - 30,
      to: data[data.axis.units.pos + '1'],
      easing: 'easeOutQuart'
    };

    var pos2Animation = {
      begin: seq * delays,
      dur: durations,
      from: data[data.axis.units.pos + '2'] - 100,
      to: data[data.axis.units.pos + '2'],
      easing: 'easeOutQuart'
    };

    var animations = {};
    animations[data.axis.units.pos + '1'] = pos1Animation;
    animations[data.axis.units.pos + '2'] = pos2Animation;
    animations['opacity'] = {
      begin: seq * delays,
      dur: durations,
      from: 0,
      to: 1,
      easing: 'easeOutQuart'
    };

    data.element.animate(animations);
  }
});

// For the sake of the example we update the chart every time it's created with a delay of 10 seconds
chart.on('created', function() {
  if(window.__exampleAnimateTimeout) {
    clearTimeout(window.__exampleAnimateTimeout);
    window.__exampleAnimateTimeout = null;
  }
  window.__exampleAnimateTimeout = setTimeout(chart.update.bind(chart), 12000);
});



});


