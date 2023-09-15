<?php 
session_start();
	//koneksi
$con = mysqli_connect("localhost", "root","","donairmanabila_uas");
	//jika aktif
if (!isset($_SESSION['uname']) || !isset($_SESSION['password'])) {
	//redirect back ke halaman login
	header("location:index.php");
} else {
	session_destroy();
	header("location:index.php");
}
?>
