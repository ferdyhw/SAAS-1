<?php 
require 'functions.php';


if(isset($_POST['register']) ) {

	if(registrasi($_POST) > 0 ) {
		echo "<script>
				alert('User Baru Berhasil Ditambahkan!');
				</script>";
				header("Location: login.php");
	} else {
		echo mysqli_error($conn);
	}


}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman SignUp</title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="style/desain6.css">
<body>

<div class="table">
	<center><h1>SIGNUP</h1></center>

	<form action="" method="post">
		<div class="tables">
		<label for="username">Username</label><br>
		<input type="text" name="username" id="username" autocomplete="off" style="color: crimson;" placeholder="Masukan Username..." required autofocus>
		<br><br>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password" autocomplete="off" style="color: crimson;" placeholder="Masukan Password..." required>
		<br><br>
		<label for="password2">Konfirmasi Password</label><br>
		<input type="password" name="password2" id="password2" autocomplete="off" style="color: crimson;" placeholder="Masukan Konfirmasi Password..." required>
		<br><br>
		<button type="submit" name="register">SignUp</button>
		<br><br>
		<center><a href="login.php">Sudah punya akun?</a></center>
		</div>
	</form>
</div>
</body>
</html>