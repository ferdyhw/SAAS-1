<?php 
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: ../login.php");
	} 
	if($_SESSION['level'] == "user") {
		header("Location: ../halaman_users/home_users.php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
</head>
<body>
	<header>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="style/desain8.css">
	<!--Navbar-->
	<div class="link">
		<ul>
			<li><a href="home_admin.php">Home</a>
			<li class="active"><a href="About.php">About</a>
			<li><a href="#">Blog</a>
			<li><a href="Logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<!--Konten-->
	<div class="box1">
		<a href="https://www.instagram.com/ferdyhwn/"><img src="style/profil.png" alt="" class="img-box"></a>
		<h1>Ferdy Hendriawan</h1>
		<h5>Admin</h5>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 	
		</p>
	</div>

</header>
</body>
</html>