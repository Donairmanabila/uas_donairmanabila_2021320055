<?php
	//include class controller
include "controller/controller.php";

	//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();

//kondisi session login
session_start();
if (isset($_SESSION['uname']) || isset($_SESSION['password'])) {
	//kondisi untuk menampilkan halaman web yang diminta
	if(isset($_GET['ib'])){
		$main->view_insert_tb_jam(); //kondisi untuk mengakses halaman tambah buku
	}
	elseif(isset($_GET['eb'])){
		$id = $_GET['eb'];
		$main->view_edit_tb_jam($id); //kondisi untuk mengakses halaman edit buku
	
	}
	elseif(isset($_GET['db'])){
		$id = $_GET['db'];
		$main->delete_tb_jam($id); //kondisi untuk menghapus data buku (mengakses fungsi delete)
	}
	elseif (isset($_GET['idb'])) {
		$main->index_tb_jam(); //kondisi get index buku
	
	}
	elseif(isset($_GET['home'])){ // halaman utama tampil menu
		$main->index();
	}else{
		$main->view_login(); //kondisi awal (halaman login)
	}
} else {
	$main->view_login();
}
?>
