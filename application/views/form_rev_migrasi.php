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
    <li class=""><a title="" href="<? base_url();?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">2</span></a>
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
  <h1>Form Revenue - Migrasi</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-content nopadding">
          <form action="<?php echo base_url()."index.php/revenue/rev_migrasi";?>" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">Witel :</label>
              <div class="controls">
                <select class="span11" name="witel" required/>
                  <option value="madiun">Madiun</option>
                  <option value="pasuruan">Pasuruan</option>
                  <option value="malang">Malang</option>
                  <option value="jember">Jember</option>
                  <option value="kediri">Kediri</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pekerjaan :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama pekerjaan" name="pekerjaan" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Program :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan program kerja" name="program" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ID Deployer :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama" name="id_dep" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nilai Rekon :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nilai rekon" name="nilai_rekon" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ODP :</label>
              <div class="controls">                
                <select class="span11" name="bulan" required/>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
              <div class="controls">  
                <select class="span11" name="tahun" required/>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status Pekerjaan :</label>
              <div class="controls">
                <select class="span11" name="status" required/>
                  <option value="selesai">Selesai</option>
                  <option value="ogp">OGP</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">PR :</label>
              <div class="controls">
                <select class="span11" name="pr" required/>
                  <option value="ok">OK</option>
                  <option value="nok">NOK</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No. PO :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nomor PO" name="no_po"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">BA Rekap :</label>
              <div class="controls">
                <select class="span11" name="ba_rekap" required/>
                  <option value="ok">OK</option>
                  <option value="nok">NOK</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">BAST :</label>
              <div class="controls">
                <select class="span11" name="bast" required/>
                  <option value="ok">OK</option>
                  <option value="nok">NOK</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">INV :</label>
              <div class="controls">
                <select class="span11" name="inv" required/>
                  <option value="ok">OK</option>
                  <option value="nok">NOK</option>
                </select>
            </div>
            </div>
            <div class="control-group">
              <label class="control-label">Status :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan status pekerjaan" name="status" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Anggaran :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan sumber anggaran" name="anggaran" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">GM/PM :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan GM/PM" name="gm_pm" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">PO Manual 108 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan PO Manual 108" name="po_manual_108">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Cek Pivot :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan hasil cek pivot" name="cek_pivot">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pecahan 29 :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan Pecahan 29" name="pecahan_29">
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
