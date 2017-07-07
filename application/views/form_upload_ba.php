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
        <li class="active"><a href="<?= base_url('index.php/Revenue/form_psb')?>">Form Provisioning</a></li>
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
          <?php
            foreach ($psb as $p) {
          ?>
<form action="<?php echo base_url()."index.php/revenue/update_psb/".$p['id_rev']."";?>" method="post" enctype="multipart/form-data">
<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Form Upload Berita Acara</h1>
</div>
<div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title">
            <h5>Data Pelanggan</h5>
          </div>
          <div class="widget-content">
           <div class="control-group">
              <label class="control-label">Witel :</label>
              <div class="controls">
                <input type="text" class="span11" value="<?= $p['wilayah'];?>" name="witel" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Pots :</label>
              <div class="controls">
                <input type="text" class="span11" name="nomor_pots" value="<?= $p['nomor_pots'];?>" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nomor Speedy :</label>
              <div class="controls">
                <input type="text" class="span11" name="nomor_speedy" value="<?= $p['nomor_speedy'];?>" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input type="text" class="span11" value="<?= $p['nama'];?>" disabled/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Berita Acara :</label>
              <div class="controls">
                <input type="file" class="span11" name="ba_psb" required/>
              </div>
            </div>
            <?php
              }
            ?>
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
