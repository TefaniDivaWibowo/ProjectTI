<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Telkom Akses Indonesia </div>
</div>
<!--end-Footer-part--> 
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url();?>assets/js/masked.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url();?>assets/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous">
</script>
<script type="text/javascript">

  $(".Squery").keyup(function(){
    // console.log( $('.formSearch').serialize());
    $.ajax({
        type: "POST",
        url: "<?php echo base_url('index.php/Welcome/search_sn/');?>",
        data : $('.formSearch').serialize(),
        success: function(data){
            // console.log('a');
          $('.isi').empty();
          $('.isi').append(data);
        }
      });
  });

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
</body>
</html>