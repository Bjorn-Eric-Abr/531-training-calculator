<?php 
  function sumLifts( $lift ) {
    $sumWave1 : $lift * 
  }
 ?>

<!--Load the Google Chart AJAX API-->
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   <script type="text/javascript">
    
   	// Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});
      
      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);


      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Lift');
      data.addColumn('number', 'Weight');
      data.addRows([
        ['Press', <?php echo $_GET["squatRM"] ?>],
        ['Squat', 180],
        ['Bench', 160],
        ['Deadlift', 210]
      ]);

      // Set chart options
      var options = {'title':'Lifts during wave',
                     'width':600,
                     'height':400};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>

<div id="chart_div"></div>
