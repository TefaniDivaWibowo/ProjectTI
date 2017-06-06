<!--sidebar-menu-->
<?php
error_reporting(0);
?>
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="submenu"> <a href=""><i class="icon icon-truck"></i> <span>Infrastructure Delivery</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/migrasi')?>">Migration</a></li>
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
    <li class=""><a href="<?= base_url('index.php/Revenue/mainis')?>"><i class="icon icon-cog"></i> <span>Maintenance Infra Support</span></a> </li>
    <li class="submenu"> <a href=""><i class="icon icon-bandcamp"></i> <span>Infrastructure Service</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/maintenance')?>">Maintenance Access</a></li>
        <li><a href="<?= base_url('index.php/Revenue/gamas')?>">Gamas & QE</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="<?= base_url('index.php/Revenue/service')?>"><i class="icon icon-briefcase"></i> <span>Service Delivery</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="<?= base_url('index.php/Revenue/pt3')?>"> Prog Optimization PT3</a></li>
        <li><a href="<?= base_url('index.php/Revenue/nodeb')?>"> NODE B</a></li>
        <li><a href="<?= base_url('index.php/Revenue/hem')?>"> HEM</a></li>
        <li><a href="<?= base_url('index.php/Revenue/pt2')?>"> Prog Optimization PT2</a></li>
      </ul>
    </li>
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"></div>
    <h1>Data Provisioning</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
          <div class="widget-content nopadding">
            <table style="overflow-x: auto;" class="table table-bordered data-table">
              <thead>
                <tr>
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
                  <!-- <th>Jenis Kabel</th>
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
                  <th>Tanggal PS</th> -->
                  <th>Hasil Cek Redaman</th>
                  <th>Biaya</th>
                  <th>Bukti BA</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $no = 0;
                      foreach($psb as $p){
                        $no++;
                  ?>
                  <tr>
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
                    <!-- <td><?= $p['jenis_kabel'];?></td>
                    <td><?= $p['panjang_kabel'];?></td>
                    <td><?= $p['kelebihan_kabel'];?></td>
                    <td><?= $p['tiang'];?></td>
                    <td><?= $p['patch_cord'];?></td>
                    <td><?= $p['patch_cord_add'];?></td>
                    <td><?= $p['kabel_utp'];?></td>
                    <td><?= $p['kabel_utp_add'];?></td>
                    <td><?= $p['stb_kedua'];?></td>
                    <td><?= $p['tgl_va'];?></td>
                    <td><?= $p['tgl_ps'];?></td> -->
                    <td><?= $p['hasil_cek_redaman'];?></td>
                    <td><?= $p['biaya'];?></td>
                    <td><a href="base_url();../../../../uploads/<?= $p['ba_rev'];?>"><?= $p['ba_rev'];?></a></td>
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
</body>


