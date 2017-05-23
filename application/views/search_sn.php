  
<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Search Serial Number</h1>
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
                <div class="span3">
                  <p style="text-align: center;">Pilih Nama Vendor</p>
                </div>
                <div class="span7">
                  <select id="vendor" name="vendor" style="width: 100%;">
                    <option value="" >Semua Vendor</option>
                    <option value="TELKOM">Telkom</option>
                    <option value="TELKOM AKSES">Telkom Akses</option>
                  </select>
                </div>
              </div>

              <?php error_reporting(0);?>

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
                  <th>Serial Number</th>
                  <th>Nama Vendor</th>
                </tr>
              </thead>
              <tbody class="isi">
                <?php
                  $no = 0;
                      foreach($data_sn as $u){
                        $no++;

                  ?>
                  <tr>
                    <td><?= $no;?></td>
                    <td><?= $u['SN'];?></td>
                    <td><?= $u['Nama_Vendor'];?></td>
                  </tr>
                  <?php
                  }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Serial Number</th>
                  <th>Nama Vendor</th>
                </tr>
              </tfoot>
            </table>
          </div>
          </div>
        </form>
    </div>
  </div>
</div>
</div>



  