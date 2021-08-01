<?php
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	} 
	if($_SESSION['level'] == "root") {
		header("Location: ../halaman_admin/home_admin.php");
	}
// Menghubungkan dengan file functions.php
require 'functions.php';

// Mengambil data dari tabel daftar
$swa = query("SELECT * FROM form");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Update List Siswa</title>	
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
<div class="nav">
    <ul>
		<li><a href="home_users.php" style="color: white;">Home</a></li>
		<li><a href="about.php" style="color: white;">About</a></li>
		<li><a href="#" style="color: white;">Blog</a></li>
		<li><a href="logout.php" style="color: white;">Logout</a></li>
		<img src="style/logo.png">
	</ul>
</div>

	<div class="judul">
		<h1>LIST SISWA YANG TERDAFTAR</h1>
	</div>
					<table>
						<thead>
							<tr>
								<th style="color: white">No</th>
								<th style="color: white; text-align: center;">Actions</th>
								<th style="color: white; text-align: center;">Nama</th>
								<th style="color: white; text-align: center;">Agama</th>
								<th style="color: white; text-align: center;">Jenis Kelamin</th>
								<th style="color: white; text-align: center;">No Telepon</th>
								<th style="color: white; text-align: center;">Foto</th>
							</tr>
						</thead>
						<tbody>
								<?php $i=1; ?>
								<?php foreach( $swa as $row ) : ?>
							<tr>
								<td><?= $i; ?></td>
								<td>
								<div class="fitur">
								<a href="update.php?id=<?= $row['id']; ?>">READ ONLY</a>
								</div>
								</td>
								<td style="text-align: center;"><?= $row['nama_lengkap']; ?></td>
								<td style="text-align: center;"><?= $row['agama']; ?></td>
								<td style="text-align: center;"><?= $row['jenis_kelamin']; ?></td>
								<td style="text-align: center;"><?= $row['telepon_sekarang']; ?></td>
								<td style="text-align: center;"><img width="90px;" height="70px;" border="2px solid;" src="../img/<?= $row['foto'];?>"></td>
							</tr>
								<?php $i++; ?>
								<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>