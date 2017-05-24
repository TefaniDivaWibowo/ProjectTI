<!DOCTYPE html>
<html lang="en">
<head>
<title>Aplikasi Project TI</title>
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
<nav>
  <ul class="nav">
    <li  class=""><a title="" href="<?= base_url('index.php/searchsn') ?>"><i class="fa fa-search"></i><span class="text"> Search Serial Number</span></a>    </li>
    <li class="dropdown" id="profile-messages">
    <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
      <i class="fa fa-money"></i>  <span class="text"> Open Revenue All </span><b class="caret"></b>
    </a>
      <ul class="dropdown-menu">

        <li class="dropdown" id="profile-messages2">
        <a data-toggle="dropdown" data-target="#profile-messages2" class="dropdown-toggle">
        Infrastructure Delivery </span><b class="caret"></b>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class=""></i> Migration</a></li>
          </ul>
        </li>

        <li class="divider"></li>

        <li class="dropdown" id="profile-messages2">
        <a data-toggle="dropdown" data-target="#profile-messages2" class="dropdown-toggle">
        Assurance </span><b class="caret"></b>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class=""></i> View</a></li>
          </ul>
        </li>
                <li class="divider"></li>
        <li><a href="#"><i class=""></i> Provisioning Indihome</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class=""></i> Maintenance Infra Support</a></li>
        <li class="divider"></li>

        <li class="dropdown" id="profile-messages3">
        <a data-toggle="dropdown" data-target="#profile-messages3" class="dropdown-toggle">
        Infrastuktur Service </span><b class="caret"></b>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class=""></i> Maintenance Akses</a></li>
            <li><a href="#"><i class=""></i> Gamas & QE</a></li>
          </ul>
        </li>

        <li class="dropdown" id="profile-messages2">
        <a data-toggle="dropdown" data-target="#profile-messages2" class="dropdown-toggle">
        Service Delivery </span><b class="caret"></b>
        </a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class=""></i> Prog Optimazation PT 3</a></li>
            <li><a href="#"><i class=""></i> NODE B</a></li>
            <li><a href="#"><i class=""></i> HEM</a></li>
            <li><a href="#"><i class=""></i> Prog Optimization PT2</a></li>
          </ul>
        </li>

      </ul>
    </li>
    <li class=""><a title="" href="<?= base_url('index.php/performassurance') ?>"><i class="fa fa-wrench"></i> <span class="text"> Open Performance Assurance</span></a></li>
  </ul>
</nav>
</div>

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?= base_url('index.php/PerformAssurance')?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?= base_url('index.php/PerformAssurance/open')?>"><i class="icon icon-signal"></i> <span>Open Performance Assurance</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->
