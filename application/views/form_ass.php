<!DOCTYPE html>
<html lang="en">
<head>
<title>Aplikasi Revenue</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-wysihtml5.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">TA Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Admin</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li class="submenu"><a href="#"><i class="icon icon-list"></i> <span>Tables</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url()."index.php/home/tampil";?>">Data Provisioning</a></li>
        <li><a href="#">Data Assurance</a></li>
      </ul>
    </li>
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?php echo base_url();?>">Form Provisioning</a></li>
        <li><a href="#">Form Assurance</a></li>
      </ul>
    </li>
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Form Provisioning</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-content nopadding">
          <form action="<?php echo base_url()."index.php/home/insert_psb";?>" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Wilayah :</label>
              <div class="controls">
                <select class="span11" name="wilayah" required/>
                  <option value="4">Madiun</option>
                  <option value="1">Pasuruan</option>
                  <option value="2">Malang</option>
                  <option value="5">Jember</option>
                  <option value="3">Kediri</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">MDF :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan MDF" name="mdf" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Pots :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nomor pots" name="nomor_pots" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Speedy :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nomor speedy" name="nomor_speedy" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama" name="nama" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan alamat" name="alamat" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ODP :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama ODP" name="odp" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ONT :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama ONT" name="ont" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">STB :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama STB" name="stb" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Layanan :</label>
              <div class="controls">
                <select class="span11" name="layanan" required/>                
    <option value="1">OP-1P</option>
    <option value="2">OP-2P</option>
    <option value="3">OP-3P</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kabel :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jenis kabel" name="jenis_kabel" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Panjang Kabel :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel" name="panjang_kabel" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tiang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah tiang" name="tiang" required/> batang
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Patch Cord :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah patch cord" name="patch_cord" required/> buah
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kabel UTP :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel utp" name="kabel_utp" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kabel PVC :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel pvc" name="kabel_pvc" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">STB Tambahan :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah stb tambahan" name="stb_kedua" required/> buah
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal VA :</label>
              <div class="controls">
                <input type="date" class="span11" name="tgl_va" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal PS :</label>
              <div class="controls">
                <input type="date" class="span11" name="tgl_ps" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Hasil Cek Redaman :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan hasil cek redaman" name="hasil_cek_redaman" required/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; TI </div>
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
</body>
</html>
