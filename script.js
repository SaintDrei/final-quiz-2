      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Class',     3],
          ['Class',     3],
          ['Eat',      2],
          ['Write', 	 2],
          ['Commute',  3],
          ['Watch TV', 1.5],
          ['Sleep',    10]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }