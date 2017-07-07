<?php
error_reporting(0);
?>
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href=""><i class="icon icon-truck"></i> <span>Infrastructure Delivery</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/migrasi')?>">Form Migration</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_migrasi')?>">Data Migration</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-wrench"></i> <span>Assurance</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/form_ass')?>">Form Assurance</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_ass')?>">Data Assurance</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-bandcamp"></i> <span>Provisioning Indihome</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/form_psb')?>">Form Provisioning</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_psb')?>">Data Provisioning</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-cog"></i> <span>Maintenance Infra Sup</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/mainis')?>">Form</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_mainis')?>">Data</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href=""><i class="icon icon-bandcamp"></i> <span>Infrastructure Service</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/form_main_access')?>">Form Maintenance Access</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_main_access')?>">Data Maintenance Access</a></li>
        <li><a href="<?= base_url('index.php/Revenue/form_gamas')?>">Form Gamas & QE</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_gamas')?>">Data Gamas & QE</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="<?= base_url('index.php/Revenue/service')?>"><i class="icon icon-briefcase"></i> <span>Service Delivery</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/pt3')?>"> Prog Optimization PT3</a></li>
        <li><a href="<?= base_url('index.php/Revenue/nodeb')?>"> NODE B</a></li>
        <li><a href="<?= base_url('index.php/Revenue/hem')?>"> HEM</a></li>
        <li><a href="<?= base_url('index.php/Revenue/pt2')?>"> Prog Optimization PT2</a></li>
        <li><a href="<?= base_url('index.php/Revenue/data_sd')?>"> Data Service Delivery</a></li>
      </ul>
    </li>    
    <li class="active"><a title="" href="<?= base_url('index.php/searchba')?>"><i class="icon icon-search"></i> <span class="text">Cari Berita Acara</span></a></li>
    <li class=""><a title="" href="<?= base_url('index.php/searchba/cari_data')?>"><i class="icon icon-search"></i> <span class="text">Cari Berdasarkan Tanggal</span></a></li>
  </ul>
</div>

<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Pencarian Berita Acara</h1>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
          <form method="post" action="<?php echo base_url()."index.php/searchba/cari_ba";?>" class="formSearch">
              <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Pilih Kategori :</p>
                </div>
                <div class="span7">
                  <select name="kategori" style="width: 100%;">
                    <option value="nomor_inet" >Nomor Internet</option>
                    <option value="nomor_telp">Nomor Telepon</option>
                    <option value="nomor_ont">Serial Number ONT</option>
                  </select>
                </div>
              </div>

              <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Data Pencarian :</p>
                </div>
                <div class="span7">
                  <input type="text" class="span11" style="width: 100%;" placeholder="Ketikkan beberapa data untuk pencarian" name="data_cari" required/>
                </div>
              </div>

              <div class="controls form-group">
              <div class="form-actions">
              <div class="span7"><p style="text-align: center;">
              <button type="submit" class="btn btn-success">Cari</button></p>
              </div></div></div>
              </form>
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel Data Pencarian</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                  <th>Bukti BA</th>
                  <th>ID REV</th>
                  <th>MDF</th>
                  <th>Nomor Pots</th>
                  <th>Nomor Speedy</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                  <th>ODP</th>
                  <th>ONT</th>
                  <th>STB</th>
                  <th>Layanan</th>
                  <th>Jenis Kabel</th>
                  <th>Panjang Kabel</th>
                  <th>Kelebihan Kabel</th>
                  <th>Tiang</th>
                  <th>Patch Cord</th>
                  <th>Patch Cord Tambahan</th>
                  <th>Kabel UTP</th>
                  <th>Kabel UTP Tambahan</th>
                  <th>Kabel PVC</th>
                  <th>STB Tambahan</th>
                  <th>Tanggal VA</th>
                  <th>Tanggal PS</th>
                  <th>Hasil Cek Redaman</th>
                  <th>Biaya</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $no = 0;
                      foreach($cari as $p){
                        $no++;

                  ?>
                  <tr>
                    <td><a href="base_url();../../../../uploads/<?= $p['ba_rev'];?>"><?= $p['ba_rev'];?></a></td>
                    <td><?= $p['id_rev'];?></td>
                    <td><?= $p['mdf'];?></td>
                    <td><?= $p['nomor_pots'];?></td>
                    <td><?= $p['nomor_speedy'];?></td>
                    <td><?= $p['nama'];?></td>
                    <td><?= $p['alamat'];?></td>
                    <td><?= $p['odp'];?></td>
                    <td><?= $p['ont'];?></td>
                    <td><?= $p['stb'];?></td>
                    <td><?= $p['layanan'];?></td>
                    <td><?= $p['jenis_kabel'];?></td>
                    <td><?= $p['panjang_kabel'];?></td>
                    <td><?= $p['kelebihan_kabel'];?></td>
                    <td><?= $p['tiang'];?></td>
                    <td><?= $p['patch_cord'];?></td>
                    <td><?= $p['patch_cord_add'];?></td>
                    <td><?= $p['kabel_utp'];?></td>
                    <td><?= $p['kabel_utp_add'];?></td>
                    <td><?= $p['kabel_pvc'];?></td>
                    <td><?= $p['stb_kedua'];?></td>
                    <td><?= $p['tgl_va'];?></td>
                    <td><?= $p['tgl_ps'];?></td>
                    <td><?= $p['hasil_cek_redaman'];?></td>
                    <td><?= $p['biaya'];?></td>
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



  