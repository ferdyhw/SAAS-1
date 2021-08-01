<?php 
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	exit;
	} 
	// Menghubungkan dengan file functions.php
	require 'functions.php';

	// Mengambil data dari tabel daftar
	$swa = query("SELECT * FROM form");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
</head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="style/desain4.css">
<body>

<div class="logo">
	<a href="home.php"><img src="style/logo.png"></a>
</div>

<div class="banner">
	<div class="link">
		<ul>
		<li class="active"><a href="home.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="list.php">List</a></li>
		<li><a href="Logout.php">Logout</a></li>
		</ul>
	</div>
	<div class="judul">	
		<h1>SELAMAT DATANG<h1>
		<p>Pendaftaran Biodata Siswa SMKN 1 CIMAHI.</p>
	</div>
	<div class="button1">
		<div class="big">
			<a href="daftar.php">Create</a>
		</div>
	</div>
	<?php $i=1; ?>
		<?php foreach( $swa as $row ) : ?>
	<div class="button2">
		<div class="big">
			<a href="form.php?id=<?= $row['id']; ?>">Update</a>
		</div>
	</div>
	<?php $i; ?>
		<?php endforeach; ?>
</div>
</body>
</html>