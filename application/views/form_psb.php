<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"></div>
  <h1>Form Provisioning</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-content nopadding">
          <form action="<?php echo base_url()."index.php/home/insert_psb";?>" method="post" class="form-horizontal" enctype="multipart/form-data">
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
              <label class="control-label">MDF :</label>
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
                <input type="file" class="span11" placeholder="Upload Berita Acara" name="ba_psb" required/>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>

