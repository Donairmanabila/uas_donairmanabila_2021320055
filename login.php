<?php
//session start
session_start();

$con = mysqli_connect("localhost", "root", "", "donairmanabila_uas");

//kondisi jika tombol login ditekan
if (isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password = md5($_POST['pw']);
	
	$query = mysqli_query($con,"SELECT * FROM admin ");
	$data = mysqli_fetch_array($query);
	$cek = mysqli_num_rows($query);
	
	if ($cek==1) {
		//session start
		$_SESSION['uname'] = @$username;
		$_SESSION['pw'] = @$password;
		header("location:index.php?home");
	}else{
		header("location:index.php");
	}
}
?>