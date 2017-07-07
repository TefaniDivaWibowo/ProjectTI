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
        <li class="active"><a href="<?= base_url('index.php/Revenue/form_ass')?>">Form Assurance</a></li>
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
    <li class=""><a title="" href="<?= base_url('index.php/searchba')?>"><i class="icon icon-search"></i> <span class="text">Cari Berita Acara</span></a></li>
    <li class=""><a title="" href="<?= base_url('index.php/searchba/cari_data')?>"><i class="icon icon-search"></i> <span class="text">Cari Berdasarkan Tanggal</span></a></li>
  </ul>
</div>

<form action="<?php echo base_url()."index.php/revenue/insert_ass";?>" method="post" enctype="multipart/form-data">
<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Form Assurance</h1>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title">
            <h5>Data Pelanggan</h5>
          </div>
          <div class="widget-content">
           <div class="control-group">
              <label class="control-label">Witel :</label>
              <div class="controls">
                <select class="span11" name="wilayah" required/>
                  <option value="madiun">Madiun</option>
                  <option value="pasuruan">Pasuruan</option>
                  <option value="malang">Malang</option>
                  <option value="jember">Jember</option>
                  <option value="kediri">Kediri</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <br><br><label class="control-label">MDF :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan MDF" name="mdf" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Pots :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nomor pots" name="nomor_pots" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Speedy :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nomor speedy" name="nomor_speedy" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama" name="nama" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan alamat" name="alamat" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ODP :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama ODP" name="odp" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ONT :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama ONT" name="ont" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">STB :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan nama STB" name="stb" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Layanan :</label>
              <div class="controls">
                <select class="span11" name="layanan" required/>                
    <option value="1">OP-1P</option>
    <option value="2">OP-2P</option>
    <option value="3">OP-3P</option>
                </select>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      </div>

      <div class="span6">
        <div class="widget-box">
          <div class="widget-title">
            <h5>Data Material</h5>
          </div>
          <div class="widget-content">
            <div class="control-group">
              <label class="control-label">Jenis Kabel :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jenis kabel" name="jenis_kabel" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Panjang Kabel :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel" name="panjang_kabel" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tiang :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah tiang" name="tiang" required/> batang
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Patch Cord :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah patch cord" name="patch_cord" required/> buah
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kabel UTP :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel utp" name="kabel_utp" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kabel PVC :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan panjang kabel pvc" name="kabel_pvc" required/> meter
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">STB Tambahan :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan jumlah stb tambahan" name="stb_kedua" required/> buah
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal VA :</label>
              <div class="controls">
                <input type="date" class="span11" name="tgl_va" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal PS :</label>
              <div class="controls">
                <input type="date" class="span11" name="tgl_ps" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Hasil Cek Redaman :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ketikkan hasil cek redaman" name="hasil_cek_redaman" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Berita Acara :</label>
              <div class="controls">
                <input type="file" class="span11" name="ba_psb"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</div></div>
</body>
</html>
