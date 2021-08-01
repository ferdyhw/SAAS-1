<?php
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	exit;
	} 
// Menghubungkan dengan file functions.php
require 'functions.php';

//Mengambil data di URL
$id = $_GET['id'];

//query data siswa berdasarkan id
$swa = query("SELECT * FROM form WHERE id = $id")[0];

//Cek tombol submit
	if(isset ($_POST["submit"])) {

//Cek data berhasil diubah atau tidak
	if(ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href='table.php';
			</script>

		";
	} else{
		echo "<script>
				alert('Data gagal diubah!');
				document.location.href='table.php';
			</script>
			";
	}

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Update</title>
</head>
<header>
<body>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<style type="text/css">
		body {
			font-family: Century Gothic;
			background: rgba(0, 0, 0, 0.9) ;
		}
		input[type="text"]{
			width: 220px;
			border: none;
			background: none;
			outline: none;
			border-bottom: 1px solid  #2d7897 ;
			color:  #2d7897 ;
		}
		input[type="date"]{
			width: 110px;
			border: none;
			background: none;
			outline: none;
			color:  #2d7897 ;
		}
		input[type="submit"]{
			border: none;
			border-radius: 4px;
			background-color: #d4d6d7;
			padding-right: 20px;
			padding-left: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			cursor: pointer;
		}
		button {
			border: none;
			border-radius: 4px;
			background-color: #2d7897;
			padding-right: 20px;
			padding-left: 20px;
			padding-top: 10px;
			padding-bottom: 10px;
			color: white;
			cursor: pointer;
		}
		td {
			color:  #2d7897 ;
		}
		h1 {
			color:  #2d7897 ;
		}
		h4 {
			color:  #2d7897 ;
		}
	</style>
	<fieldset>
		<center><h1 style="font-size: 50px">PENGEDITAN BIODATA SISWA</h1></center>
	</fieldset>
	<br>
	<fieldset>
		<h4>A. IDENTITAS SISWA</h4>
		<form action="" method="post">
		<table>
			<input type="hidden" name="id" value="<?= $swa['id']?>">
			<tr>
			<td>NAMA LENGKAP</td>
			<td>:</td>
			<td><input type="text" name="nama-lengkap" size="30" required value="<?= $swa['nama_lengkap']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA PANGGILAN</td>
			<td>:</td>
			<td><input type="text" name="nama-panggilan" size="30" required value="<?= $swa['nama_panggilan']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td>
			<input type="radio" name="jenis-kelamin" size="30" value="Laki-Laki" required>Laki-Laki
			<input type="radio" name="jenis-kelamin" size="30" value="Perempuan" required>Perempuan
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>TEMPAT, TANGGAL LAHIR</td>
			<td>:</td>
			<td><input type="text" name="ttg" size="30" value="<?= $swa['tempat_lahir']?>"> <input type="date" name="tanggal" required value="<?= $swa['tanggal_lahir']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT SEKARANG</td>
			<td>:</td>
			<td><input type="text" name="alamat-siswa" size="30" required value="<?= $swa['alamat_sekarang']?>"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos1" value="<?= $swa['kodepos_sekarang']?>"> TELEPON <input type="text" name="telepon1" placeholder="+62" required value="<?= $swa['telepon_sekarang']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT LIBUR</td>
			<td>:</td>
			<td><input type="text" name="alamat-libur" size="30" required value="<?= $swa['alamat_libur']?>"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos2" required value="<?= $swa['kodepos_libur']?>"> TELEPON <input type="text" name="telepon2" placeholder="+62" required value="<?= $swa['telepon_libur']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HOBI</td>
			<td>:</td>
			<td><input type="text" name="hobi" size="30" required value="<?= $swa['hobi']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ESKUL</td>
			<td>:</td>
			<td><input type="text" name="eskul" size="30" required value="<?= $swa['eskul']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>GOLONGAN DARAH</td>
			<td>:</td>
			<td>
			<input type="radio" name="golongan-darah" size="30" value="A" required>A
			<input type="radio" name="golongan-darah" size="30" value="B" required>B
			<input type="radio" name="golongan-darah" size="30" value="O" required>O
			<input type="radio" name="golongan-darah" size="30" value="AB" required>AB
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td>
			<input type="radio" name="agama1" size="30" value="islam" required>Islam
			<input type="radio" name="agama1" size="30" value="protestan" required>Protestan
			<input type="radio" name="agama1" size="30" value="katholik" required>Katholik
			<input type="radio" name="agama1" size="30" value="hindhu" required>Hindu
			<input type="radio" name="agama1" size="30" value="budha" required>Budha
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>ASAL SMP</td>
			<td>:</td>
			<td><input type="text" name="smp" size="30" required value="<?= $swa['asal_smp']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ANAK KE</td>
			<td>:</td>
			<td><input type="text" name="anak-ke" size="1" value="<?= $swa['anak_ke']?>"> Dari <input type="text" name="dari" size="1" required value="<?= $swa['dari']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>FOTO SISWA</td>
			<td>:</td>
			<td><input type="file" name="foto" size="1" value="<?= $swa['foto_siswa']?>"></td>
			</tr>

		</table>
		<h4>B. ORANG TUA / WALI</h4>
		<table>
			<tr>
			<td>NAMA AYAH</td>
			<td>:</td>
			<td><input type="text" name="nama-ayah" size="30" required value="<?= $swa['nama_ayah']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-ayah" size="30" required value="<?= $swa['umur_ayah']?>"></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-ayah" size="30" required value="<?= $swa['pekerjaan_ayah']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><input type="text" name="penghasilan-ayah" size="30" required value="<?= $swa['penghasilan_ayah']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td>
			<input type="radio" name="agama2" size="30" value="islam" required>Islam
			<input type="radio" name="agama2" size="30" value="protestan" required>Protestan
			<input type="radio" name="agama2" size="30" value="katholik" required>Katholik
			<input type="radio" name="agama2" size="30" value="hindhu" required>Hindu
			<input type="radio" name="agama2" size="30" value="budha" required>Budha
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><input type="text" name="alamat-ayah" size="30" required value="<?= $swa['alamat_ayah']?>"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos3" required value="<?= $swa['kodepos_ayah']?>"> TELEPON <input type="text" name="telepon3" placeholder="+62" required value="<?= $swa['telepon_ayah']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA IBU</td>
			<td>:</td>
			<td><input type="text" name="nama-ibu" size="30" required value="<?= $swa['nama_ibu']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-ibu" size="30" required value="<?= $swa['umur_ibu']?>"></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-ibu" size="30" required value="<?= $swa['pekerjaan_ibu']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><input type="text" name="penghasilan-ibu" size="30" required value="<?= $swa['penghasilan_ibu']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td>
			<input type="radio" name="agama4" size="30" value="islam" required>Islam
			<input type="radio" name="agama4" size="30" value="protestan" required>Protestan
			<input type="radio" name="agama4" size="30" value="katholik" required>Katholik
			<input type="radio" name="agama4" size="30" value="hindhu" required>Hindu
			<input type="radio" name="agama4" size="30" value="budha" required>Budha
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><input type="text" name="alamat-ibu" size="30" required value="<?= $swa['alamat_ibu']?>"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos4" required value="<?= $swa['kodepos_ibu']?>"> TELEPON <input type="text" name="telepon4" placeholder="+62" required value="<?= $swa['telepon_ibu']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA WALI</td>
			<td>:</td>
			<td><input type="text" name="nama-wali" size="30" value="<?= $swa['nama_wali']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-wali" size="30" value="<?= $swa['umur_wali']?>"></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-wali" size="30" value="<?= $swa['pekerjaan_wali']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HUBUNGAN WALI</td>
			<td>:</td>
			<td><input type="text" name="hubungan-wali" size="30" value="<?= $swa['hubungan_wali']?>"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td>
			<input type="radio" name="agama5" size="30" value="islam" required>Islam
			<input type="radio" name="agama5" size="30" value="protestan" required>Protestan
			<input type="radio" name="agama5" size="30" value="katholik" required>Katholik
			<input type="radio" name="agama5" size="30" value="hindhu" required>Hindu
			<input type="radio" name="agama5" size="30" value="budha" required>Budha
			</td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><input type="text" name="alamat-wali" size="30" value="<?= $swa['alamat_wali']?>"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos5" value="<?= $swa['kodepos_wali']?>"> TELEPON <input type="text" name="telepon5" placeholder="+62" value="<?= $swa['telepon_wali']?>"></td>
			</tr>
		</table>
		<br>
		<button type="submit" name="submit">Simpan</button>
		<a href="table.php"><input type="submit" name="batal" value="Batal"></a>
		</form>
	</fieldset>
	<br>
	<fieldset>
		<center><h4 style="font-size: 13px; margin: 0;">SMK NEGERI 1 CIMAHI</h4></center>
	</fieldset>

</body>
</html>