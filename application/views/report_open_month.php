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
        <li class="active"><a href="<?= base_url('index.php/PerformAssurance/report_open_month')?>">Report Open Ticket Month</a></li>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/report_open_yeartodate')?>">Report Open Ticket Year to Date</a></li>
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
    <h1>Report Open Per-Month</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <form action="<?= base_url('index.php/PerformAssurance/rom')?>" method="post">
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >Month</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span7">
            <select name="bln">
              <option value="all">All</option>
              <?php
                $monthName  = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                for ($i=0; $i < count($monthName); $i++) { 
                  $mn   = 1 + $i;
                  if ($mn == date("m")) {
                    if ($mn < 9) {
                      $bln  = "0" . $mn;
                      echo "<option selected value=". $bln .">" . $monthName[$i] . "</option>";
                    }
                    else {
                      echo "<option value=". $mn .">" . $monthName[$i] . "</option>";
                    }
                  } 
                  else {
                    if ($mn < 9) {
                      $bln  = "0" . $mn;
                      echo "<option value=". $bln .">" . $monthName[$i] . "</option>";
                    } 
                    else {
                      echo "<option value=". $mn .">" . $monthName[$i] . "</option>";
                    }
                  }
                }
              ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >Mitra / PA</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span7">
            <select name="mipa">
              <option value="all">All</option>
              <option value="PA">PA</option>
              <option value="TA">TA</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="controls form-group">
          <div class="span3">
            <p style="text-align: right; padding: 5px" >Technology</p>
          </div>
          &nbsp;&nbsp;&nbsp;
          <div class="span7">
            <select name="tech">
              <option value="all">All</option>
              <option value="Copper">Copper</option>
              <option value="Fiber">Fiber</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span7" style="text-align: center;">
        <div class="controls form-group">
          <input  type="submit" name="submit" class="btn btn-primary btn-mini" value="Send">
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
                <tr>
                  <th></th>
                  <?php
                    $tanggal = [];
                    for ($i=1; $i < 31; $i++) { 
                      if ($i <= 9) {
                        echo "<th>0$i</th>";
                        array_push($tanggal, "0".$i);
                      } else {
                        echo "<th>$i</th>";
                        array_push($tanggal, $i);
                      }
                    }
                  ?>
                </tr>
              </thead>
              <tbody>
              <?php 

              /*var_dump($tanggal);

              echo "<pre>";
              var_dump($kota);
              echo "</pre>";*/

              /*foreach($kota as $single_kota) { ?>
                <tr>
                  <th><?= key($single_kota[0]) ?></th>
                  <?php
                      foreach($tanggal as $single_tanggal){
                          foreach($single_kota as $detail){
                            $time   = strtotime($detail->ttr_customer);
                            $tgl    = date("d", $time);
                            if($single_tanggal == $tgl){
                              $data = $detail->count;
                              echo "<td>" . $data . "</td>";
                            }
                          }

                      }
                    }*/
                  ?>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <?php
                    for ($i=1; $i < 31; $i++) { 
                      if ($i <= 9) {
                        echo "<th>0$i</th>";
                      } else {
                        echo "<th>$i</th>";
                      }
                    }
                  ?>
                </tr>
              </tfoot>
            </table>
            </div>
          </div>
      </div>
    </div>
    </form>
  </div>
</div>




