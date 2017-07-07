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
  <h1>Pencarian Data</h1>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
          <form method="post" action="<?php echo base_url()."index.php/RevRekon/cari_hasil";?>" class="formSearch">
          <div class="form-actions">
          <?php
              $namaBulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",  "September", "Oktober",  "November", "Desember");
              $hariIni = time(); // menyimpan tanggal hari ini
              $f_hari = date("M-d-Y", $hariIni); // format tanggal hari ini
              $tahun = date("Y", $hariIni); // ambil tahun dari hari ini 
          ?>
            <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Pilih Kategori Data:</p>
                </div>
                <div class="span7">
                  <select name="kategori" style="width: 100%;">
                    <option value="semua_ba" >Semua BA</option>
                    <option value="psb">Provisioning Indihome</option>
                    <option value="ggn">Assurance</option>
                    <option value="migrasi">Migration</option>
                    <option value="mainis">Maintenance Infra Support</option>
                    <option value="main_access">Maintenance Access</option>
                    <option value="gamas">Gamas & QE</option>
                    <option value="pt3">Prog Optimization PT3</option>
                    <option value="nodeb">NODE B</option>
                    <option value="hem">HEM</option> 
                    <option value="pt2">Prog Optimization PT2</option>
                  </select>
                </div>
              </div>    

              <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Pilih Kategori Area:</p>
                </div>
                <div class="span7">
                  <select name="area" style="width: 100%;">
                    <option value="semua_ba">Semua Area</option>
                    <option value="malang">Malang</option>
                    <option value="madiun">Madiun</option>
                    <option value="pasuruan">Pasuruan</option>
                    <option value="kediri">Kediri</option>
                    <option value="jember">Jember</option>
                  </select>
                </div>
              </div>
 
            <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Tanggal Awal:</p>
                </div>
                <!-- <div class="span3">
                  <p style="text-align: center;">Pilih Tanggal :</p>
                </div> -->
                <div class="span2">
              <select name="tanggal1" >
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                <?php for ($n=10; $n<=31 ; $n++) { ?>
                  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
                  <?php } ?>
              </select>
                </div>
            </div>

            <div class="controls form-group">
                <div class="span2">
              <select name="bulan1">
                  <option value="01"> <?php echo $namaBulan[1]; ?> </option>
                  <option value="02"> <?php echo $namaBulan[2]; ?> </option>
                  <option value="03"> <?php echo $namaBulan[3]; ?> </option>
                  <option value="04"> <?php echo $namaBulan[4]; ?> </option>
                  <option value="05"> <?php echo $namaBulan[5]; ?> </option>
                  <option value="06"> <?php echo $namaBulan[6]; ?> </option>
                  <option value="07"> <?php echo $namaBulan[7]; ?> </option>
                  <option value="08"> <?php echo $namaBulan[8]; ?> </option>
                  <option value="09"> <?php echo $namaBulan[9]; ?> </option>
                  <?php for ($n=10; $n<=12 ; $n++) { ?> 
                  <option value="<?php echo $n; ?>" > <?php echo $namaBulan[$n]; ?> </option> 
                  <?php } ?> 
              </select>
                </div>
            </div>

            <div class="controls form-group">
                <!-- <div class="span3">
                  <p style="text-align: center;">Pilih Tahun :</p>
                </div> -->
                <div class="span2">
              <select name="tahun1" >
              <?php for ($n=$tahun; $n<=$tahun+5 ; $n++) { ?>
              <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
              <?php } ?>
              </select>
                </div>
                <div class="span3">
                </div>
            </div>

            <div class="controls form-group">
                <div class="span3">
                  <p style="text-align: center;">Tanggal Akhir:</p>
                </div>
                <!-- <div class="span3">
                  <p style="text-align: center;">Pilih Tanggal :</p>
                </div> -->
                <div class="span2">
              <select name="tanggal2" >
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                <?php for ($n=10; $n<=31 ; $n++) { ?>
                  <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
                  <?php } ?>
              </select>
                </div>
            </div>

            <div class="controls form-group">
                <div class="span2">
              <select name="bulan2">
                  <option value="01"> <?php echo $namaBulan[1]; ?> </option>
                  <option value="02"> <?php echo $namaBulan[2]; ?> </option>
                  <option value="03"> <?php echo $namaBulan[3]; ?> </option>
                  <option value="04"> <?php echo $namaBulan[4]; ?> </option>
                  <option value="05"> <?php echo $namaBulan[5]; ?> </option>
                  <option value="06"> <?php echo $namaBulan[6]; ?> </option>
                  <option value="07"> <?php echo $namaBulan[7]; ?> </option>
                  <option value="08"> <?php echo $namaBulan[8]; ?> </option>
                  <option value="09"> <?php echo $namaBulan[9]; ?> </option>
                  <?php for ($n=10; $n<=12 ; $n++) { ?> 
                  <option value="<?php echo $n; ?>" > <?php echo $namaBulan[$n]; ?> </option> 
                  <?php } ?> 
              </select>
                </div>
            </div>

            <div class="controls form-group">
                <!-- <div class="span3">
                  <p style="text-align: center;">Pilih Tahun :</p>
                </div> -->
                <div class="span2">
              <select name="tahun2" >
              <?php for ($n=$tahun; $n<=$tahun+5 ; $n++) { ?>
              <option value="<?php echo $n; ?>" > <?php echo $n; ?> </option>
              <?php } ?>
              </select>
                </div>
            </div>

              <div class="controls form-group">              
              <div class="span7"><p style="text-align: center;">
              <button type="submit" class="btn btn-success">Cari</button></p>
              </div>
              </div>
              </div>
              </form>
              <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Tabel Data Pencarian</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x: auto;">
            <table class="table table-bordered data-table">
              <thead>
                <th>Ditagihkan</th>
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
                  <th>Bukti BA</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $no = 0;
                      foreach($cari as $p){
                        $no++;

                  ?>
                  <tr>
                    <td><a href="<?php echo base_url()."index.php/RevRekon/tagih_cek/" . $p['id_rev'] ."";?>"><button class="btn btn-mini">Rekon</button></a></td>
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
                    
                    <?php
                      if($p['biaya'] != NULL ){?>
                    <td><?= $p['biaya'];?></td>                       
                        <?php } else{?>
                    <td><a href="<?php echo base_url()."index.php/Revenue/update_bia/" . $p['id_rev'] ."";?>">Update biaya</a></td>
                        <?php }
                    ?>

                    <?php
                      if($p['ba_rev'] != NULL ){?>
                        <td><a href="base_url();../../../../uploads/<?= $p['ba_rev'];?>"><?= $p['ba_rev'];?></a></td>                        
                        <?php } else{?>

                    <td><a href="<?php echo base_url()."index.php/Revenue/upload_ba/" . $p['id_rev'] ."";?>">Upload BA</a></td>
                        <?php }
                    ?>
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



  