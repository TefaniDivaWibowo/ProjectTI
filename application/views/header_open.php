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
    <li  class=""><a title="" href=""><i class="fa fa-search"></i>  <span class="text">Cari Serial Number</span></a>

    <!--<a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><b class="caret">-->

      <!--<ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-key"></i> Log Out</a></li>
      </ul>-->
    </li>
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="fa fa-money"></i>  <span class="text">Revenue</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class=""></i> Infrastructure Delivery</a></li>
          <ul>
            <li><a href="#"><i class=""></i> Migration</a></li>
          </ul>
        <li class="divider"></li>
        <li><a href="#"><i class=""></i> Assurance</a></li>
          <ul>
            <li><a href="#"><i class=""></i> View </a></li>
          </ul>
        <li class="divider"></li>
        <li><a href="#"><i class=""></i> Provisioning Indihome</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class=""></i> Maintenance Infra Support</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class=""></i> Infrastuktur Service</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="fa fa-wrench"></i> <span class="text">Assurance MTTR</span></a></li>
  </ul>
</div> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li class="submenu"><a href="#"><i class="icon icon-list"></i> <span>Tables</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href=" //echo base_url()."index.php/home/tampil";">Data Provisioning</a></li>
        <li><a href="#">Data Assurance</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href=" //echo base_url();">Form Provisioning</a></li>
        <li><a href="#">Form Assurance</a></li>
      </ul>
    </li>
  </ul>
</div>