<!DOCTYPE html>
<html>
<head>
	<title>Memasukkan Data PSB</title>
</head>
<body>
<table>
<form method="post" action="<?php echo base_url()."index.php/prov/insert_psb"; ?>" >
	<tr>
		<td>MDF</td>
		<td>:</td>
		<td><input type="text" name="mdf"></td>
	</tr>
	<tr>
		<td>Nomor Pots</td>
		<td>:</td>
		<td><input type="text" name="nomor_pots"></td>
	</tr>
	<tr>
		<td>Nomor Speedy</td>
		<td>:</td>
		<td><input type="text" name="nomor_speedy"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>ODP</td>
		<td>:</td>
		<td><input type="text" name="odp"></td>
	</tr>
	<tr>
		<td>ONT</td>
		<td>:</td>
		<td><input type="text" name="ont"></td>
	</tr>
	<tr>
		<td>STB</td>
		<td>:</td>
		<td><input type="text" name="stb"></td>
	</tr>
	<tr>
		<td>Layanan</td>
		<td>:</td>
		<td>
		<select name="layanan">
		<option value="1">OP-1P</option>
		<option value="2">OP-2P</option>
		<option value="3">OP-3P</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Jenis Kabel</td>
		<td>:</td>
		<td><input type="text" name="jenis_kabel"></td>
	</tr>
	<tr>
		<td>Panjang Kabel</td>
		<td>:</td>
		<td><input type="text" name="panjang_kabel"></td>
	</tr>
	<tr>
		<td>Tiang</td>
		<td>:</td>
		<td><input type="text" name="tiang"></td>
	</tr>
	<tr>
		<td>Patch Cord</td>
		<td>:</td>
		<td><input type="text" name="patch_cord"></td>
	</tr>
	<tr>
		<td>Kabel UTP</td>
		<td>:</td>
		<td><input type="text" name="kabel_utp"></td>
	</tr>
	<tr>
		<td>Kabel PVC</td>
		<td>:</td>
		<td><input type="text" name="kabel_pvc"></td>
	</tr>
	<tr>
		<td>STB Kedua</td>
		<td>:</td>
		<td><input type="text" name="stb_kedua"></td>
	</tr>
	<tr>
		<td>Tanggal VA</td>
		<td>:</td>
		<td><input type="date" name="tgl_va"></td>
	</tr>
	<tr>
		<td>Tanggal PS</td>
		<td>:</td>
		<td><input type="date" name="tgl_ps"></td>
	</tr>
	<tr>
		<td>Hasil Cek Redaman</td>
		<td>:</td>
		<td><input type="text" name="hasil_cek_redaman"></td>
	</tr>	
	<tr>
		<td><input type="submit" name="submit" value="INPUT DATA"></td>
	</tr>
</form>
</table>
</body>
</html>