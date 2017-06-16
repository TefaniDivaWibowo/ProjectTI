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

      <ul >
        <li class="btn btn-large"> <a href="#open">Open</a> </li>
        <li class="btn btn-large"> <a href="calendar.html">Close</a> </li>
        <li class="btn btn-large"> <a href="error404.html">Gaul</a> </li>
      </ul>

    <hr>

  <div id="open">
    <!-- <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper_hari" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber_hari" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="pa_copper_hari" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="pa_fiber_hari" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <div id="close">
    <!-- <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper_c" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber_c" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper_c" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber_c" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_copper_hari_close" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="ta_fiber_hari_close" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="pa_copper_hari_close" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content">
            <div id="pa_fiber_hari_close" style="width: auto; height: auto;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

