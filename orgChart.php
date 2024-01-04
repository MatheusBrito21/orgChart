<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="json/diretor_operacao.js? <?php echo microtime(true)?>"></script>
    <script src="json/gestor_operacao.js? <?php echo microtime(true)?>"></script>
    <script src="json/gestor_area.js? <?php echo microtime(true)?>"></script>
    <script src="json/gestor3.js? <?php echo microtime(true)?>"></script>
    <script src="json/gestor2.js? <?php echo microtime(true)?>"></script>
    <script src="json/gestor_direto.js? <?php echo microtime(true)?>"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      const diretor_operacao = diretores;
      const gestor_operacao = gestores;
      const gestor_area = gestores_area;
      const gestor_3 = gestores_3;
      const gestor_2 = gestores_2;
      const gestor_direto = gestores_direto;

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nome');
        data.addColumn('string', 'Gestor');

        //
        diretor_operacao.forEach(e => {
            data.addRow([{'v':`${e.diretor_operacao}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            ``
            ])
        });
        gestor_operacao.forEach(e => {
            data.addRow([{'v':`${e.gestor_operacao}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            `${e.diretor_operacao}`
            ])
        });
        gestor_area.forEach(e => {
            data.addRow([{'v':`${e.gestor_area}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            `${e.gestor_operacao}`
            ])
        });
        gestores_3.forEach(e => {
            data.addRow([{'v':`${e.gestor_3}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            `${e.gestor_area}`
            ])
        });
        gestor_2.forEach(e => {
            data.addRow([{'v':`${e.gestor_2}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            `${e.gestor_3}`
            ])
        });
        gestor_direto.forEach(e => {
            data.addRow([{'v':`${e.gestor_direto}`,'f':`${e.username}<div style="color:red; font-style:italic">${e.cargo}</div>`},
            `${e.gestor_2}`
            ])
        });

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true,'allowCollapse':false, 'size':'small','compactRows':true});
      }
   </script>
    </head>
  <body>
    <div id="chart_div"></div>
  </body>