<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="json/all_gestores.js?<?php echo microtime(true)?>"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

    const all = all_gestores;

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome');
        data.addColumn('string', 'Gestor');

        all.forEach(e => {
                data.addRow([{
                        'v': `${e.id}`,
                        'f': `${e.nome}<div style="color:red">${e.cargo}</div>`
                    },
                    e.superiorId ? `${e.superiorId}` : null
                ])
            });

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true,'allowCollapse':true, 'size':'small','compactRows':false});
      }
   </script>
   <style>
   

   </style>
    </head>
  <body>
    <div id="chart_div"></div>
  </body>