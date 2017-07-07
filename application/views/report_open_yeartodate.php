<!--Design Tabel-->
<style type="text/css">
  th, td { white-space: nowrap; }

div.pager {
    text-align: center;
    margin: 1em 0;
}

div.pager span {
    display: inline-block;
    width: 1.8em;
    height: 1.8em;
    line-height: 1.8;
    text-align: center;
    cursor: pointer;
    background: #000;
    color: #fff;
    margin-right: 0.5em;
}

div.pager span.active {
    background: #c00;
}
</style>

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"></a>
  <ul>
    <li><a href="<?= base_url('index.php/PerformAssurance')?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Open Ticket</span> <span class="label label-important">4</span></a>
      <ul>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/open')?>">Data Open Ticket</a></li>
        <li class=""><a href="<?= base_url('')?>">Report Open Ticket</a></li>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/report_open_month')?>">Report Open Ticket Month</a></li>
        <li class="active"><a href="<?= base_url('index.php/PerformAssurance/report_open_yeartodate')?>">Report Open Ticket Year to Date</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Close Ticket</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/PerformAssurance/close')?>">Data Close Ticket</a></li>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/report_close')?>">Report Close Ticket</a></li>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/report_close_month')?>">Report Close Ticket Month</a></li>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/report_close_yeartodate')?>">Report Close Ticket Year to Date</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><!--<a href="#" title="Go to Home" class="tip-bottom">--></div>
    <h1>Report Open Year to Date</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >Choose Time</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span3">
            <input type="date" name="date">
          </div>
        </div>
      </div>
    </div>
    <br>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >To</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span3">
            <input type="date" name="dateto">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >Area</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span7">
            <select>
              <option value="all">All Area</option>
              <option value="mdn">Madiun</option>
              <option value="mlg">Malang</option>
              <option value="kdr">Kediri</option>
              <option value="jbr">Jember</option>
              <option value="psa">Pasuruan</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div style="overflow-x: auto;" class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                
              </thead>
              <tbody>
               
              </tfoot>
            </table>
            </div>
          </div>
      </div>
    </div>
  </div>

</div>




