<!DOCTYPE html>
<html lang="en">
<head>
<title>Aplikasi Project</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-media.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<!--DataTable Horizontal Scroll Start-->
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">-->
<!--DataTable Horizontal Scroll End-->

<body>
<div id="header">
  <h1><a href="dashboard.html">Aplikasi Project</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <!--<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>-->
    <li class=""><a title="" href="<?= base_url('index.php/SearchSN/');?>"><i class="icon icon-search"></i> <span class="text">&nbsp;Search Serial Number</span></a></li>
    <li class=""><a title="" href="<?= base_url('index.php/Revenue/');?>"><i class="icon icon-money"></i> <span class="text">&nbsp;Open Revenue All</span></a></li> 
    <li class=""><a title="" href="<?= base_url('index.php/PerformAssurance/');?>"><i class="icon icon-wrench"></i> <span class="text">&nbsp;Open Performance Assurance</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<!--<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>-->
<!--close-top-serch--> 