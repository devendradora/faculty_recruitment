$(document).ready(function(){
  var plot1 = jQuery.jqplot ('chart1', [feedback_data], 
    { 
      seriesDefaults: {
        // Make this a pie chart.
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true
        }
      }, 
      title:{text:"Course Feedback"},
      legend: { show:true, location: 'e' }
    }
  );
  var plot1 = jQuery.jqplot ('chart2', [exit_data], 
    { 
    	seriesColors: [ "#18bc9c", "#e74c3c", "#EAA228", "#579575", "#839557", "#958c12",
        "#953579", "#4b5de4", "#d8b83f", "#ff5800", "#0085cc"],
      	seriesDefaults: {
        // Make this a pie chart.
        renderer: jQuery.jqplot.PieRenderer, 
        rendererOptions: {
          // Put data labels on the pie slices.
          // By default, labels show the percentage of the slice.
          showDataLabels: true,

        }
      }, 
      title:{text:"Exit Feedback"},
      fontSize:18,
      legend: { show:true, location: 'e' }
    }
  );
});