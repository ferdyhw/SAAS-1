<?php

// Koneksi Database

$conn = mysqli_connect("localhost", "root", "", "saas_1");



function query($query) {

	global $conn;

	$result = mysqli_query($conn, $query);

	$rows = [];

	while($row = mysqli_fetch_assoc($result)) {

			$rows[] = $row;

	}

	return $rows;

}



function tambah($data) {

	global $conn;



	$nama_lengkap     = $data['nama-lengkap'];
	
	$nama_panggilan   = $data['nama-panggilan'];
	
	$jenis_kelamin    = $data['jenis-kelamin'];
	
	$ttg              = $data['ttg'];
	
	$tanggal          = $data['tanggal'];
	
	$alamat_siswa     = $data['alamat-siswa'];
	
	$kodepos1         = $data['kodepos1'];
	
	$telepon1         = $data['telepon1'];
	
	$alamat_libur     = $data['alamat-libur'];
	
	$kodepos2         = $data['kodepos2'];
	
	$telepon2         = $data['telepon2'];
	
	$hobi             = $data['hobi'];
	
	$eskul            = $data['eskul'];
	
	$golongan_darah   = $data['golongan-darah'];
	
	$agama1           = $data['agama1'];
	
	$smp              = $data['smp'];
	
	$anak_ke          = $data['anak-ke'];
	
	$dari             = $data['dari'];
	
	$nama_ayah        = $data['nama-ayah'];
	
	$umur_ayah        = $data['umur-ayah'];
	
	$pekerjaan_ayah   = $data['pekerjaan-ayah'];
	
	$penghasilan_ayah = $data['penghasilan-ayah'];
	
	$agama2           = $data['agama2'];
	
	$alamat_ayah      = $data['alamat-ayah'];
	
	$kodepos3         = $data['kodepos3'];
	
	$telepon3         = $data['telepon3'];
	
	$nama_ibu         = $data['nama-ibu'];
	
	$umur_ibu         = $data['umur-ibu'];
	
	$pekerjaan_ibu    = $data['pekerjaan-ibu'];
	
	$penghasilan_ibu  = $data['penghasilan-ibu'];
	
	$agama4           = $data['agama4'];
	
	$alamat_ibu       = $data['alamat-ibu'];
	
	$kodepos4         = $data['kodepos4'];
	
	$telepon4         = $data['telepon4'];
	
	$nama_wali        = $data['nama-wali'];
	
	$umur_wali        = $data['umur-wali'];
	
	$pekerjaan_wali   = $data['pekerjaan-wali'];
	
	$hubungan_wali    = $data['hubungan-wali'];
	
	$agama5           = $data['agama5'];
	
	$alamat_wali      = $data['alamat-wali'];
	
	$kodepos5         = $data['kodepos5'];
	
	$telepon5         = $data['telepon5'];
	
	
	
	$foto             = $_FILES['foto']['name'];
	
	$tmp              = $_FILES['foto']['tmp_name'];
	
	$foto_baru        = date('dmYhis').$foto;
	
	$path             = "../img/".$foto_baru;

	move_uploaded_file($tmp, $path);

	$query = "INSERT INTO form VALUES('', '$nama_lengkap', '$nama_panggilan', '$jenis_kelamin', '$ttg', '$tanggal', '$alamat_siswa', '$kodepos1', '$telepon1', '$alamat_libur', '$kodepos2', '$telepon2', '$hobi', '$eskul', '$golongan_darah' , '$agama1', '$smp', '$anak_ke', '$dari', '$foto_baru', '$nama_ayah', '$umur_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$agama2', '$alamat_ayah', '$kodepos3', '$telepon3', '$nama_ibu', '$umur_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$agama4', '$alamat_ibu', '$kodepos4', '$telepon4', '$nama_wali', '$umur_wali', '$pekerjaan_wali', '$hubungan_wali', '$agama5', '$alamat_wali', '$kodepos5', '$telepon5')";

	mysqli_query($conn, $query);



	return mysqli_affected_rows($conn);

}



function ubah($data) {

	global $conn;



	$id               = $data['id'];
	
	$nama_lengkap     = $data['nama-lengkap'];
	
	$nama_panggilan   = $data['nama-panggilan'];
	
	$jenis_kelamin    = $data['jenis-kelamin'];
	
	$ttg              = $data['ttg'];
	
	$tanggal          = $data['tanggal'];
	
	$alamat_siswa     = $data['alamat-siswa'];
	
	$kodepos1         = $data['kodepos1'];
	
	$telepon1         = $data['telepon1'];
	
	$alamat_libur     = $data['alamat-libur'];
	
	$kodepos2         = $data['kodepos2'];
	
	$telepon2         = $data['telepon2'];
	
	$hobi             = $data['hobi'];
	
	$eskul            = $data['eskul'];
	
	$golongan_darah   = $data['golongan-darah'];
	
	$agama1           = $data['agama1'];
	
	$smp              = $data['smp'];
	
	$anak_ke          = $data['anak-ke'];
	
	$dari             = $data['dari'];
	
	$nama_ayah        = $data['nama-ayah'];
	
	$umur_ayah        = $data['umur-ayah'];
	
	$pekerjaan_ayah   = $data['pekerjaan-ayah'];
	
	$penghasilan_ayah = $data['penghasilan-ayah'];
	
	$agama2           = $data['agama2'];
	
	$alamat_ayah      = $data['alamat-ayah'];
	
	$kodepos3         = $data['kodepos3'];
	
	$telepon3         = $data['telepon3'];
	
	$nama_ibu         = $data['nama-ibu'];
	
	$umur_ibu         = $data['umur-ibu'];
	
	$pekerjaan_ibu    = $data['pekerjaan-ibu'];
	
	$penghasilan_ibu  = $data['penghasilan-ibu'];
	
	$agama4           = $data['agama4'];
	
	$alamat_ibu       = $data['alamat-ibu'];
	
	$kodepos4         = $data['kodepos4'];
	
	$telepon4         = $data['telepon4'];
	
	$nama_wali        = $data['nama-wali'];
	
	$umur_wali        = $data['umur-wali'];
	
	$pekerjaan_wali   = $data['pekerjaan-wali'];
	
	$hubungan_wali    = $data['hubungan-wali'];
	
	$agama5           = $data['agama5'];
	
	$alamat_wali      = $data['alamat-wali'];
	
	$kodepos5         = $data['kodepos5'];
	
	$telepon5         = $data['telepon5'];
	
	
	
	$foto             = $_FILES['foto']['name'];
	
	$tmp              = $_FILES['foto']['tmp_name'];
	
	$foto_baru        = date('dmYhis').$foto;
	
	$path             = "../img/".$foto_baru;

	move_uploaded_file($tmp, $path);

	$query = "UPDATE form SET

				nama_lengkap     = '$nama_lengkap',
				
				nama_panggilan   = '$nama_panggilan',
				
				jenis_kelamin    = '$jenis_kelamin',
				
				tempat_lahir     = '$ttg',
				
				tanggal_lahir    = '$tanggal',
				
				alamat_sekarang  = '$alamat_siswa',
				
				kodepos_sekarang = '$kodepos1',
				
				telepon_sekarang = '$telepon1',
				
				alamat_libur     = '$alamat_libur',
				
				kodepos_libur    = '$kodepos2',
				
				telepon_libur    = '$telepon2',
				
				hobi             = '$hobi',
				
				eskul            = '$eskul',
				
				golongan_darah   = '$golongan_darah',
				
				agama            = '$agama1',
				
				asal_smp         = '$smp',
				
				anak_ke          = '$anak_ke',
				
				dari             = '$dari',
				
				foto             = '$foto_baru',
				
				nama_ayah        = '$nama_ayah',
				
				umur_ayah        = '$umur_ayah',
				
				pekerjaan_ayah   = '$pekerjaan_ayah',
				
				penghasilan_ayah = '$penghasilan_ayah',
				
				agama_ayah       = '$agama2',
				
				alamat_ayah      = '$alamat_ayah',
				
				kodepos_ayah     = '$kodepos3',
				
				telepon_ayah     = '$telepon3',
				
				nama_ibu         = '$nama_ibu',
				
				umur_ibu         = '$umur_ibu',
				
				pekerjaan_ibu    = '$pekerjaan_ibu',
				
				penghasilan_ibu  = '$penghasilan_ibu',
				
				agama_ibu        = '$agama4',
				
				alamat_ibu       = '$alamat_ibu',
				
				kodepos_ibu      = '$kodepos4',
				
				telepon_ibu      = '$telepon4',
				
				nama_wali        = '$nama_wali',
				
				umur_wali        = '$umur_wali',
				
				pekerjaan_wali   = '$pekerjaan_wali',
				
				hubungan_wali    = '$hubungan_wali',
				
				agama_wali       = '$agama5',
				
				alamat_wali      = '$alamat_wali',
				
				kodepos_wali     = '$kodepos5',
				
				telepon_wali     = '$telepon5'



				WHERE id = $id

				";

	mysqli_query($conn, $query);



	return mysqli_affected_rows($conn);

}



function hapus($id) {

	global $conn;



	mysqli_query($conn, "DELETE FROM form WHERE id = $id");

	return mysqli_affected_rows($conn);

}



function registrasi($data){

	global $conn;



	$username = strtolower(stripslashes($data['username']));

	$password = mysqli_real_escape_string($conn, $data['password']);

	$password2 = mysqli_real_escape_string($conn, $data['password2']);



	//Cek Username

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if(mysqli_fetch_assoc($result) ) {

		echo "<script>

			alert('Username sudah terdafar!');

		</script>";

	return false;



	}



	if($password !== $password2) {

		echo "<script>

			alert('Konfirmasi Password tidak sesuai!');

		</script>";

		return false;

	}



	//Enkripsi Password

	$password = password_hash($password, PASSWORD_DEFAULT);



	//Tambah Ke database

	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);

}

?>