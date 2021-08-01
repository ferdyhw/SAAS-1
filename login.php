<?php 
session_start();
require 'functions.php';

//Cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['user']) ) {
	$id = $_COOKIE['id'];
	$user = $_COOKIE['user'];

//Ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

//Cek cookie dan username
	if($user === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}


if(isset($_POST['login']) ) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	// menyeleksi data user dengan username dan password yang sesuai
	$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($result);
 
	// cek apakah username dan password di temukan pada database
	if($cek > 0){
 
	$data = mysqli_fetch_assoc($result);
 
	if($data['level']=="root"){
	// buat session login dan username
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "root";
	// alihkan ke halaman dashboard pegawai
		header("location:halaman_admin/home_admin.php");
 
	// cek jika user login sebagai user
	}elseif($data['level']=="user"){
	// buat session login dan username
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "user";
	// alihkan ke halaman dashboard pegawai
	header("location:halaman_users/home_users.php");

	}else{
 
	// alihkan ke halaman login kembali
	header("location:index.php?pesan=gagal");
	}	
}

{

	//Set session
		$_SESSION['login'] = true;

	//Cek remember me
		if(isset($_POST['remember']) ){
			//Buat cookie

			setcookie('id', $row['id'], time() + 1200);
			setcookie('user', hash('sha256', $row['username']), time() + 1200);
		}

	}
	
	$error = true;

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>//HALAMAN LOGIN//</title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="style/desain5.css">
<body>
<div class="table">
	<center><h1>LOGIN</h1></center>

<?php if(isset($error) ) : ?>
	<p style="color:red;font-style:italic;font-size: 12px;">Username / Password Salah</p>
<?php  endif; ?>
	<form action="" method="post">
		<div class="tables">
		<label for='username'>Username</label><br>
		<input type="text" name="username" id="username" autocomplete="off" style="color: crimson;" placeholder="Masukan Username..." required autofocus>
		<br><br>
		<label for='password'>Password</label><br>
		<input type="password" name="password" id="password" style="color: crimson;" placeholder="Masukan Password..." required>
		<br><br>
		<input type="checkbox" name="remember" id="remember">
		<label for='remember'>Remember me</label>
		<br>
		<button type="submit" name="login">Login</button>
		<br><br>
		<center class="link" ><p>Copy Right @2019</p></center>
	
	</form>
</div>
</body>
</html>