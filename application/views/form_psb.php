<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href=""><i class="icon icon-truck"></i> <span>Infrastructure Delivery</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>">Migration</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-wrench"></i> <span>Assurance</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>">View</a></li>
      </ul>
    </li>
    <li class=""><a href="<?= base_url('index.php/PerformAssurance')?>"><i class="icon icon-bandcamp"></i> <span>Provisioning Indihome</span></a> </li>
    <li class=""><a href="<?= base_url('index.php/PerformAssurance')?>"><i class="icon icon-cog"></i> <span>Maintenance Infra Support</span></a> </li>
    <li class="submenu"> <a href=""><i class="icon icon-bandcamp"></i> <span>Infrastructure Service</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>">Maintenance Access</a></li>
        <li><a href="form-common.html">Gamas & QE</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-briefcase"></i> <span>Service Delivery</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>"> Prog Optimization PT3</a></li>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>"> NODE B</a></li>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>"> HEM</a></li>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>"> Prog Optimization PT2</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><!--<a href="#" title="Go to Home" class="tip-bottom">--></div>
    <h1>Dashboard Performance Assurance</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Real Time chart 1</h5>
          </div>
          <div class="widget-content">
            <div id="placeholder2"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Real Time chart 2</h5>
          </div>
          <div class="widget-content">
            <div id="placeholder2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Line chart</h5>
          </div>
          <div class="widget-content">
            <div class="bars"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Line chart</h5>
          </div>
          <div class="widget-content">
            <div class="bars"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


