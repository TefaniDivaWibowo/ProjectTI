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
    <li class="submenu"> <a href=""><i class="icon icon-th-list"></i> <span>Open</span> <span class="label label-important">2</span></a>
      <ul>
        <li class=""><a href="<?= base_url('index.php/PerformAssurance/open')?>">Data Open</a></li>
        <li class="active"><a href="<?= base_url('index.php/PerformAssurance/report_open')?>">Report Open</a></li>
      </ul>
    </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"><!--<a href="#" title="Go to Home" class="tip-bottom">--></div>
    <h1>Report Open Performace Assurance</h1>
  </div>
  <div class="container-fluid">
  <hr>

  <div class="row-fluid">
        <div class="span4">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>Total</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>
                      MITRA/PA&nbsp;
                    </th>
                    <th>
                      <select>
                        <option>TA</option>
                        <option>PA</option>
                      </select>
                    </th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th>
                      Technology&nbsp;
                    </th>
                    <th>
                      <div class="controls">
                        <select>
                          <option>Copper</option>
                          <option>Fiber</option>
                        </select>
                      </div>
                    </th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th>
                      <div class="controls">
                        <select>
                          <option>Row Labels</option>
                          <option>Select All</option>
                          <?php
                            for ($i=1; $i < 31; $i++) { 
                          ?>
                            <option><?php echo $i;?></option>
                          <?php
                            }
                          ?>
                        </select>
                      </div>
                    </th>
                    <th>Count of Witel</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  for ($i=1; $i < 31; $i++) { 
                ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td>Halo</td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

              <div class="span7">
                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>PA COPPER</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>AREA</th>
                          <th>MADIUN</th>
                          <th>MALANG</th>
                          <th>KEDIRI</th>
                          <th>JEMBER</th>
                          <th>PASURUAN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>OPEN</th>
                          <td><?= $Copper_Madiun?></td>
                          <td><?= $Copper_Malang?></td>
                          <td><?= $Copper_Kediri?></td>
                          <td><?= $Copper_Jember?></td>
                          <td><?= $Copper_Pasuruan?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <hr>

                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>PA FIBER</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>AREA</th>
                          <th>MADIUN</th>
                          <th>MALANG</th>
                          <th>KEDIRI</th>
                          <th>JEMBER</th>
                          <th>PASURUAN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>OPEN</th>
                          <td><?= $Fiber_Madiun?></td>
                          <td><?= $Fiber_Malang?></td>
                          <td><?= $Fiber_Kediri?></td>
                          <td><?= $Fiber_Jember?></td>
                          <td><?= $Fiber_Pasuruan?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <hr>

                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>TA COPPER</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>AREA</th>
                          <th>MADIUN</th>
                          <th>MALANG</th>
                          <th>KEDIRI</th>
                          <th>JEMBER</th>
                          <th>PASURUAN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>OPEN</th>
                          <td><?= $Copper_MadiunTA?></td>
                          <td><?= $Copper_MalangTA?></td>
                          <td><?= $Copper_KediriTA?></td>
                          <td><?= $Copper_JemberTA?></td>
                          <td><?= $Copper_PasuruanTA?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <hr>

                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
                    <h5>TA FIBER</h5>
                  </div>
                  <div class="widget-content nopadding">
                    <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>AREA</th>
                          <th>MADIUN</th>
                          <th>MALANG</th>
                          <th>KEDIRI</th>
                          <th>JEMBER</th>
                          <th>PASURUAN</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>OPEN</th>
                          <td><?= $Fiber_MadiunTA?></td>
                          <td><?= $Fiber_MalangTA?></td>
                          <td><?= $Fiber_KediriTA?></td>
                          <td><?= $Fiber_JemberTA?></td>
                          <td><?= $Fiber_PasuruanTA?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    </div>

    <div class="row-fluid">
        <div class="span3">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>TA COPPER</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="2">
                      TAN CLOSE
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  for ($i=1; $i < 31; $i++) { 
                ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td>Halo</td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="span3">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>TA FIBER</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="2">
                      TANGGAL CLOSE
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  for ($i=1; $i < 31; $i++) { 
                ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td>Halo</td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="span3">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>PA COPPER</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="2">
                      TANGGAL CLOSE
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  for ($i=1; $i < 31; $i++) { 
                ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td>Halo</td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="span3">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
              <h5>PA FIBER</h5>
            </div>
            <div class="widget-content nopadding">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="2">
                      TANGGAL CLOSE
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  for ($i=1; $i < 31; $i++) { 
                ?>
                  <tr>
                    <td><?= $i;?></td>
                    <td>Halo</td>
                  </tr>
                <?php
                  }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
</div>



