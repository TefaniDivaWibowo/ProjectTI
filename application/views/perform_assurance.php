  
<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Performance Assurance</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
          <form method="post" action="" class="formSearch">
              <!-- <div class="form-group">
                <label>Serial Number</label>
                <input style="width: 100%;" type="text" class="Squery" name="sn" placeholder="Masukkan SN">
              </div> -->
              <!-- /.form-group -->
              <div class="form-group">
                <div class="span6">
                  <button class="btn btn-primary">Import</button>
                  <button class="btn btn-info">Export</button>
                </div>
                <div class="span3" align="left">
                  
                </div>
              </div>
              </form>

              <br>
              <hr>

            <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
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
                  <th>TTR Customer</th>
                  <th>TTR Nasional</th>
                  <th>TTR Regional</th>
                  <th>TTR Witel</th>
                  <th>TTR Mitra</th>
                  <th>TTR Agent</th>
                  <th>Status</th>
                  <th>OSM Resolved Code</th>
                  <th>Last Update Ticket</th>
                  <th>Closed/Reopen By</th>
                  <th>Resolved By</th>
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
                      foreach($data_open as $u){
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
                    <td><?= $u['ttr_customer'];?></td>
                    <td><?= $u['ttr_nasional'];?></td>
                    <td><?= $u['ttr_regional'];?></td>
                    <td><?= $u['ttr_witel'];?></td>
                    <td><?= $u['ttr_mitra'];?></td>
                    <td><?= $u['ttr_agent'];?></td>
                    <td><?= $u['status'];?></td>
                    <td><?= $u['osm_resolved_code'];?></td>
                    <td><?= $u['last_updated_ticket'];?></td>
                    <td><?= $u['status_date'];?></td>
                    <td><?= $u['closed_reop3n_by'];?></td>
                    <td><?= $u['resolved by'];?></td>
                    <td><?= $u['workzone'];?></td>
                    <td><?= $u['mitra_pa'];?></td>
                    <td><?= $u['witel'];?></td>
                    <td><?= $u['regional'];?></td>
                    <td><?= $u['incident_symptom'];?></td>
                    <td><?= $u['solution_segment'];?></td>
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
                  <th>TTR Customer</th>
                  <th>TTR Nasional</th>
                  <th>TTR Regional</th>
                  <th>TTR Witel</th>
                  <th>TTR Mitra</th>
                  <th>TTR Agent</th>
                  <th>Status</th>
                  <th>OSM Resolved Code</th>
                  <th>Last Update Ticket</th>
                  <th>Closed/Reopen By</th>
                  <th>Resolved By</th>
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
          </div>
        </form>
    </div>
  </div>
</div>
</div>



  