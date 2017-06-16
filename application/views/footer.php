<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; PT Telkom Akses <a href="http://themedesigner.in">Malang</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.tables.js"></script>

<!--SearchSN start-->

<script type="text/javascript">
	$("#vendor").change(function(){
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('index.php/SearchSN/search_sn/');?>",
        data : $('.formSearch').serialize(),
        success: function(data){
            // console.log('a');
          $('.isi').empty();
          $('.isi').append(data);
        }
      });
  	});

  $('.FormSearch').submit(function(e){
    e.preventDefault();
  });

  $( “c1” ).triggerHandler( “click” );
</script>

<!--SearchSN end-->

<!--DataTable Horizontal Scroll Start-->
<!-- <script type="text/javascript" href="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" href="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
  } );
</script> -->
<!--DataTable Horizontal Scroll End-->

<!--DataOpen Pagination-->
<!--<script type="text/javascript" href="//code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script type="text/javascript" href="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>-->
<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#myTable').DataTable( {
        "pagingType": "full_numbers"
    } );
  } );
</script> -->
<!---->

<!--Chart-->

<?php
  /*echo "<pre>";
  print_r($chart0);
  echo "<br>";
  print_r($chart1);
  echo "<br>";
  print_r($chart2);
  echo "<br>";
  print_r($chart3);
  echo "<br>";
  echo "</pre>";*/
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
<<<<<<< HEAD
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChartRev1);
=======
>>>>>>> 36255c692b54668953b5c4eeb5fd31b578ae621c

      //CHART WILAYAH
      /*google.charts.setOnLoadCallback(drawChartTAC);
      google.charts.setOnLoadCallback(drawChartTAF);
      google.charts.setOnLoadCallback(drawChartPAC);
      google.charts.setOnLoadCallback(drawChartPAF);

      function drawChartTAC() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari'));
        chart.draw(data, options);
      }

      function drawChartTAF() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari'));
        chart.draw(data, options);
      }

      function drawChartPAC() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari'));
        chart.draw(data, options);
      }

      function drawChartPAF() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari'));
        chart.draw(data, options);
      }*/

      //CHART PERHARI
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawChart3);
      google.charts.setOnLoadCallback(drawChart4);

      function drawChart() {
        var result = '<?php echo $chart0; ?>';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari'));
        chart.draw(data, options);
      }

      function drawChartRev1() {

        var result = '<?php echo $chart; ?>';
        // console.log(result);

        var data = new google.visualization.DataTable(result);

        var options = {
          title: 'Provisioning Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_rev1'));

        chart.draw(data, options);
      }

      function drawChart2() {
        var result = '<?php echo $chart1; ?>';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN TA FIBER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_fiber_hari'));
        chart.draw(data, options);
      }

      function drawChart3() {
        var result = '<?php echo $chart2; ?>';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN PA FIBER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('pa_copper_hari'));
        chart.draw(data, options);
      }

      function drawChart4() {
        var result = '<?php echo $chart3; ?>';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'OPEN PA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('pa_fiber_hari'));
        chart.draw(data, options);
      }

      //CHART PERHARI
      /*google.charts.setOnLoadCallback(drawChartC1);
      google.charts.setOnLoadCallback(drawChartC2);
      google.charts.setOnLoadCallback(drawChartC3);
      google.charts.setOnLoadCallback(drawChartC4);

      function drawChartC1() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'CLOSE TA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_copper_hari_close'));
        chart.draw(data, options);
      }

      function drawChartC2() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'CLOSE TA FIBER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('ta_fiber_hari_close'));
        chart.draw(data, options);
      }

      function drawChartC3() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'CLOSE PA COPPER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('pa_copper_hari_close'));
        chart.draw(data, options);
      }

      function drawChartC4() {
        var result = '';
        // console.log(result);
        var data = new google.visualization.DataTable(result);
        var options = {
          title: 'CLOSE PA FIBER PERHARI',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('pa_fiber_hari_close'));
        chart.draw(data, options);
      }*/
    </script>
<!---->

</body>
</html>