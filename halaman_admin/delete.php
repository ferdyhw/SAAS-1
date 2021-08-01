<?php
session_start();

	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	exit;
	} 
// Menghubungkan dengan file functions.php
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
echo "<script>
				alert('Data berhasil dihapus!');
				document.location.href='table.php';
	</script>";
} else {
	echo "<script>
				alert('Data gagal dihapus!');
				document.location.href='table.php';
	</script>";
}

 ?>