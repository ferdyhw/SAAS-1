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
		a {
			border: none;
			border-radius: 4px;
			background-color: #2d7897;
			padding-right: 17px;
			padding-left: 17px;
			padding-top: 10px;
			padding-bottom: 10px;
			color: white;
			font-size: 13px;
			cursor: pointer;
			text-decoration: none;
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
			<td><?= $swa['nama_lengkap']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA PANGGILAN</td>
			<td>:</td>
			<td><?= $swa['nama_panggilan']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>JENIS KELAMIN</td>
			<td>:</td>
			<td><?= $swa['jenis_kelamin'] ?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>TEMPAT, TANGGAL LAHIR</td>
			<td>:</td>
			<td><?= $swa['tempat_lahir']?> <?= $swa['tanggal_lahir']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT SEKARANG</td>
			<td>:</td>
			<td><?= $swa['alamat_sekarang']?></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS : <?= $swa['kodepos_sekarang']?> | TELEPON : <?= $swa['telepon_sekarang']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT LIBUR</td>
			<td>:</td>
			<td><?= $swa['alamat_libur']?></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS : <?= $swa['kodepos_libur']?> | TELEPON : <?= $swa['telepon_libur']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HOBI</td>
			<td>:</td>
			<td><?= $swa['hobi']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ESKUL</td>
			<td>:</td>
			<td><?= $swa['eskul']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>GOLONGAN DARAH</td>
			<td>:</td>
			<td><?= $swa['golongan_darah'] ?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td><?= $swa['agama'] ?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ASAL SMP</td>
			<td>:</td>
			<td><?= $swa['asal_smp']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ANAK KE</td>
			<td>:</td>
			<td><?= $swa['anak_ke']?> Dari <?= $swa['dari']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>FOTO SISWA</td>
			<td>:</td>
			<td><?= $swa['foto']?></input></td>
			</tr>

		</table>
		<h4>B. ORANG TUA / WALI</h4>
		<table>
			<tr>
			<td>NAMA AYAH</td>
			<td>:</td>
			<td><?= $swa['nama_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><?= $swa['umur_ayah']?></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><?= $swa['pekerjaan_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><?= $swa['penghasilan_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td><?= $swa['agama_ayah'] ?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><?= $swa['alamat_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS : <?= $swa['kodepos_ayah']?> | TELEPON : <?= $swa['telepon_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA IBU</td>
			<td>:</td>
			<td><?= $swa['nama_ibu']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><?= $swa['umur_ibu']?></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><?= $swa['pekerjaan_ibu']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><?= $swa['penghasilan_ibu']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td><?= $swa['agama_ayah']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><?= $swa['alamat_ibu']?></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS : <?= $swa['kodepos_ibu']?> | TELEPON : <?= $swa['telepon_ibu']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA WALI</td>
			<td>:</td>
			<td><?= $swa['nama_wali']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><?= $swa['umur_wali']?></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><?= $swa['pekerjaan_wali']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HUBUNGAN WALI</td>
			<td>:</td>
			<td><?= $swa['hubungan_wali']?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>AGAMA</td>
			<td>:</td>
			<td><?= $swa['agama_ayah'] ?></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT</td>
			<td>:</td>
			<td><?= $swa['alamat_wali']?></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS : <?= $swa['kodepos_wali']?> | TELEPON : <?= $swa['telepon_wali']?></td>
			</tr>
		</table>
		<br>
		<a href="table.php">Kembali</a>
		</form>
	</fieldset>
	<br>
	<fieldset>
		<center><h4 style="font-size: 13px; margin: 0;">SMK NEGERI 1 CIMAHI</h4></center>
	</fieldset>

</body>
</html>