<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="<?= base_url('index.php/PerformAssurance')?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!--<li> <a href=""><i class="icon icon-table"></i> <span>Open Performance Assurance</span></a> </li>-->
    <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Open</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/open')?>">Data Open</a></li>
        <li><a href="<?= base_url('index.php/PerformAssurance/report_open')?>">Report Open</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Close</span> <span class="label label-important">2</span></a>
      <ul>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/close')?>">Data Close</a></li>
        <li><a href="<?= base_url('index.php/PerformAssurance/report_close')?>">Report Close</a></li>
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
            <div id="curve_chart" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-signal"></i> </span>
            <h5>Real Time chart 2</h5>
          </div>
          <div class="widget-content">
            <div id="bar_chart" style="width: auto; height: auto;"></div>
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

