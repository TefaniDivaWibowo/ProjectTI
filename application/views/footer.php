<!--Footer-part-->
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {

        var result = '<?php echo $chart; ?>';
        // console.log(result);

        var data = new google.visualization.DataTable(result);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      function drawChart2() {

        var result = '<?php echo $chart; ?>';
        // console.log(result);

        var data = new google.visualization.DataTable(result);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));

        chart.draw(data, options);
      }
    </script>


</body>
</html>