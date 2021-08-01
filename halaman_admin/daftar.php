<?php
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	} 
	if($_SESSION['level'] == "user") {
		header("Location: ../halaman_users/home_users.php");
	}
// Menghubungkan dengan file functions.php
require 'functions.php';

//Cek tombol submit
	if(isset ($_POST["submit"])) {

//Cek data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href='home_admin.php';
			</script>
		";
	} else{
		echo "<script>
				alert('Data gagal ditambahkan!');
				document.location.href='home_admin.php';
			</script>
			";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pendaftaran</title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<body>
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
		<center><h1 style="font-size: 50px">PENDAFTARAN BIODATA SISWA</h1></center>
	</fieldset>
	<br>
	<fieldset>
		<h4>A. IDENTITAS SISWA</h4>
		<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
			<td>NAMA LENGKAP</td>
			<td>:</td>
			<td><input type="text" name="nama-lengkap" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA PANGGILAN</td>
			<td>:</td>
			<td><input type="text" name="nama-panggilan" size="30" required></td>
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
			<td><input type="text" name="ttg" size="30"> <input type="date" name="tanggal" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT SEKARANG</td>
			<td>:</td>
			<td><input type="text" name="alamat-siswa" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos1"> TELEPON <input type="text" name="telepon1" placeholder="+62" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ALAMAT LIBUR</td>
			<td>:</td>
			<td><input type="text" name="alamat-libur" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos2" required> TELEPON <input type="text" name="telepon2" placeholder="+62" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HOBI</td>
			<td>:</td>
			<td><input type="text" name="hobi" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ESKUL</td>
			<td>:</td>
			<td><input type="text" name="eskul" size="30" required></td>
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
			<td><input type="text" name="smp" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>ANAK KE</td>
			<td>:</td>
			<td><input type="text" name="anak-ke" size="1"> Dari <input type="text" name="dari" size="1" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>FOTO SISWA</td>
			<td>:</td>
			<td><input type="file" name="foto"></input></td>
			</tr>

		</table>
		<h4>B. ORANG TUA / WALI</h4>
		<table>
			<tr>
			<td>NAMA AYAH</td>
			<td>:</td>
			<td><input type="text" name="nama-ayah" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-ayah" size="30" required></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-ayah" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><input type="text" name="penghasilan-ayah" size="30" required></td>
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
			<td><input type="text" name="alamat-ayah" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos3" required> TELEPON <input type="text" name="telepon3" placeholder="+62" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA IBU</td>
			<td>:</td>
			<td><input type="text" name="nama-ibu" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-ibu" size="30" required></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-ibu" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>PENGHASILAN PERBULAN</td>
			<td>:</td>
			<td><input type="text" name="penghasilan-ibu" size="30" required></td>
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
			<td><input type="text" name="alamat-ibu" size="30" required></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos4" required> TELEPON <input type="text" name="telepon4" placeholder="+62" required></td>
			</tr>

			<tr></tr>

			<tr>
			<td>NAMA WALI</td>
			<td>:</td>
			<td><input type="text" name="nama-wali" size="30"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>UMUR</td>
			<td>:</td>
			<td><input type="text" name="umur-wali" size="30"></td>
			</tr>

			<tr></tr>
			
			<tr>
			<td>PEKERJAAN</td>
			<td>:</td>
			<td><input type="text" name="pekerjaan-wali" size="30"></td>
			</tr>

			<tr></tr>

			<tr>
			<td>HUBUNGAN WALI</td>
			<td>:</td>
			<td><input type="text" name="hubungan-wali" size="30"></td>
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
			<td><input type="text" name="alamat-wali" size="30"></td>
			</tr>

			<tr></tr>

			<tr>
				<td></td>
				<td></td>
				<td> KODE POS <input type="text" name="kodepos5"> TELEPON <input type="text" name="telepon5" placeholder="+62"></td>
			</tr>
		</table>
		<br>
		<button type="submit" name="submit">Kirim</button>
		<a href="home_admin.php"><input type="submit" name="batal" value="Batal"></a>
		</form>
	</fieldset>
	<br>
	<fieldset>
		<center><h4 style="font-size: 13px; margin: 0;">SMK NEGERI 1 CIMAHI</h4></center>
	</fieldset>

</body>
</html>