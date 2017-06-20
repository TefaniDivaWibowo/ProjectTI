<!--Design Tabel-->
<style type="text/css">
  th, td { white-space: nowrap; }
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
    <h1>Data Close Assurance Performance</h1>
  </div>
  <div class="container-fluid">
  <hr>
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
                  <th>No.</th>
                  <th>Incident</th>
                  <th>Customer Name</th>
                  <th>Summary</th>
                  <th>Owner Group</th>
                  <th>Owner</th>
                  <th>Last Updated Work Log</th>
                  <th>Last Work Log Date</th>
                  <th>Source</th>
                  <th>Segment</th>
                  <th>Channel</th>
                  <th>Customer Segment</th>
                  <th>Service ID</th>
                  <th>Service No</th>
                  <th>Service Type</th>
                  <th>Top Priority</th>
                  <th>SLG</th>
                  <th>Technology</th>
                  <th>Datek</th>
                  <th>RK Name</th>
                  <th>Induk Gamas</th>
                  <th>Reported Date</th>
                  <th>Tanggal Open</th>
                  <th>TTR Nasional</th>
                  <th>TTR Regional</th>
                  <th>TTR Witel</th>
                  <th>TTR Mitra</th>
                  <th>TTR Agent</th>
                  <th>Status</th>
                  <th>OSM Resolved Code</th>
                  <th>Last Update Ticket</th>
                  <th>Status Date</th>
                  <th>Status Time</th>
                  <th>Tanggal Close</th>
                  <th>From Tanggal</th>
                  <th>From Tanggal</th>
                  <th>From Jam</th>
                  <th>Workzone</th>
                  <th>MITRA/PA</th>
                  <th>Witel</th>
                  <th>Regional</th>
                  <th>Incident's Symptom</th>
                  <th>Solutions's Segment</th>
                  <th>Actual Solution</th>
                </tr>
              </thead>
              <tbody class="isi">
                <?php
                  $no = 0;
                      foreach($data_close as $u){
                        $no++;

                  ?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><?= $u['incident'];?></td>
                    <td><?= $u['customer_name'];?></td>
                    <td><?= $u['summary'];?></td>
                    <td><?= $u['owner_group'];?></td>
                    <td><?= $u['owner'];?></td>
                    <td><?= $u['last_update_work_log'];?></td>
                    <td><?= $u['last_update_work_log_date'];?></td>
                    <td><?= $u['source'];?></td>
                    <td><?= $u['segment'];?></td>
                    <td><?= $u['channel'];?></td>
                    <td><?= $u['customer_segment'];?></td>
                    <td><?= $u['service_id'];?></td>
                    <td><?= $u['service_no'];?></td>
                    <td><?= $u['service_type'];?></td>
                    <td><?= $u['top_priority'];?></td>
                    <td><?= $u['slg'];?></td>
                    <td><?= $u['technology'];?></td>
                    <td><?= $u['datek'];?></td>
                    <td><?= $u['rk_name'];?></td>
                    <td><?= $u['induk_gamas'];?></td>
                    <td><?= $u['reported date'];?></td>
                    <td><?= $u['tgl_open'];?></td>
                    <td><?= $u['ttr_nasional'];?></td>
                    <td><?= $u['ttr_regional'];?></td>
                    <td><?= $u['ttr_witel'];?></td>
                    <td><?= $u['ttr_mitra'];?></td>
                    <td><?= $u['ttr_agent'];?></td>
                    <td><?= $u['status'];?></td>
                    <td><?= $u['osm_resolved_code'];?></td>
                    <td><?= $u['last_updated_ticket'];?></td>
                    <td><?= $u['status_date'];?></td>
                    <td><?= $u['status_time'];?></td>
                    <td><?= $u['tgl_close'];?></td>
                    <td><?= $u['from_tgl'];?></td>
                    <td><?= $u['from_tanggal'];?></td>
                    <td><?= $u['from_jam'];?></td>
                    <td><?= $u['workzone'];?></td>
                    <td><?= $u['mitra_pa'];?></td>
                    <td><?= $u['witel'];?></td>
                    <td><?= $u['regional'];?></td>
                    <td><?= $u['incidents_symptom'];?></td>
                    <td><?= $u['solutions_segment'];?></td>
                    <td><?= $u['actual_solution'];?></td>
                  </tr>
                  <?php
                  }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Incident</th>
                  <th>Customer Name</th>
                  <th>Summary</th>
                  <th>Owner Group</th>
                  <th>Owner</th>
                  <th>Last Updated Work Log</th>
                  <th>Last Work Log Date</th>
                  <th>Source</th>
                  <th>Segment</th>
                  <th>Channel</th>
                  <th>Customer Segment</th>
                  <th>Service ID</th>
                  <th>Service No</th>
                  <th>Service Type</th>
                  <th>Top Priority</th>
                  <th>SLG</th>
                  <th>Technology</th>
                  <th>Datek</th>
                  <th>RK Name</th>
                  <th>Induk Gamas</th>
                  <th>Reported Date</th>
                  <th>Tanggal Open</th>
                  <th>TTR Nasional</th>
                  <th>TTR Regional</th>
                  <th>TTR Witel</th>
                  <th>TTR Mitra</th>
                  <th>TTR Agent</th>
                  <th>Status</th>
                  <th>OSM Resolved Code</th>
                  <th>Last Update Ticket</th>
                  <th>Status Date</th>
                  <th>Status Time</th>
                  <th>Tanggal Close</th>
                  <th>From Tanggal</th>
                  <th>From Tanggal</th>
                  <th>From Jam</th>
                  <th>Workzone</th>
                  <th>MITRA/PA</th>
                  <th>Witel</th>
                  <th>Regional</th>
                  <th>Incident's Symptom</th>
                  <th>Solutions's Segment</th>
                  <th>Actual Solution</th>
                </tr>
              </tfoot>
            </table>
          </div>
          </div>
    </div>
  </div>
</div>
</div>


