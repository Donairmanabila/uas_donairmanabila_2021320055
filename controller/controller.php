<?php
	//include class model
include "model/model.php";

class controller{
		//variabel public
	public $model;

		//inisialisasi awal untuk class
	function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dr class model
		}

		//awal login section

		function view_login()
		{
			include "view/login.php"; //fungsi menampilkan halaman login
		}

		//akhir login section

		function index(){
			include "view/home.php"; //fungsi menampilkan halaman utama
		}

		//awal section jam

		function index_tb_jam(){
			$data = $this->model->select_all_tb_jam(); //pada class ini (controller), akses variabel model, 
			//akses fungsi select_all_tb_jam (kalo bingung lihat di class model ada fungsi select_all_tb_jam)
			include "view/index_tb_jam.php"; //memamnggil view.php pada folder view
		}

		function view_insert_tb_jam(){
			$data = $this->model->get_max_no();
			include "view/tambah_tb_jam.php"; //menampilkan halaman add data jam
		}

		function view_edit_tb_jam($id){
			$data = $this->model->select_id_tb_jam($id); //select data buku berdasarkan id ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/edit_tb_jam.php"; //menampilkan halaman untuk mengedit data jam
		}
		
		//fungsi update data jam
		function update_tb_jam(){
			$no = $_POST['no'];
			$merk = $_POST['merk_jam'];
			$warna = $_POST['warna'];
			$harga = $_POST['harga'];

			//upload foto
			$tipefile = $_FILES['gambar']['type'];
			$lokasifile = $_FILES['gambar']['tmp_name'];
			$ukuranfile = $_FILES['gambar']['size'];
			$namafile = $_FILES['gambar']['name'];
			$namafoto = $no.".".end(explode(".",$namafile));
			$tempatfile = "gambar_jam/$namafoto";

			//memindahkan ke database
			move_uploaded_file($lokasifile, "$tempatfile");
			
			$update = $this->model->update_j($no, $merk, $warna, $harga, $tempatfile);
			
			header("location:index.php?idb=index_tb_jam");
		}
		
		function delete_tb_jam($id){
			$delete = $this->model->delete_j($id);
			header("location:index.php?idb=index_tb_jam");
		}
		
		function insert_tb_jam(){
			$no = $_POST['no'];
			$merk = $_POST['merk_jam'];
			$warna = $_POST['warna'];
			$harga = $_POST['harga'];
			
			
			//upload foto
			$tipefile = $_FILES['gambar']['type'];
			$lokasifile = $_FILES['gambar']['tmp_name'];
			$ukuranfile = $_FILES['gambar']['size'];
			$namafile = $_FILES['gambar']['name'];
			$namafoto = $no.".".end(explode(".",$namafile));
			$tempatfile = "gambar_jam/$namafoto";

			//memindahkan ke database
			move_uploaded_file($lokasifile, "$tempatfile");
			
			$insert = $this->model->insert_j($no, $merk, $warna, $harga, $tempatfile);
			header("location:index.php?idb=index_tb_jam");
		}

		//akhir section jam
				
		function __destruct(){
		}
	}
	?>