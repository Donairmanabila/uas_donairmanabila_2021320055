<?php
class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		public $connect; //inisialisasi variabel agar bisa di panggil di semua function
		function __construct(){
			$this->connect = mysqli_connect("localhost", "root","","donairmanabila_uas");
		}
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		//awal section jam
		function select_all_tb_jam(){
			$query = "select * from tb_jam";
			return $this->execute($query);
		}

		function get_max_no(){
			$query = "select max(no)as no from tb_jam"; //query untuk membuat no jam otomatis
			return $this->execute($query);
		}

		function select_id_tb_jam($id){
			$query = "select * from tb_jam where no='$id'";
			return $this->execute($query);
		}
		
		function update_j($no, $merk, $warna, $harga, $tempatfile){
			$query = "update tb_jam set merk_jam='$merk', warna='$warna',
			harga='$harga', gambar='$tempatfile' where tb_jam.no='$no'";
			return $this->execute($query);
		}
		
		function delete_j($id){
			$query = "delete from tb_jam where no='$id'";
			return $this->execute($query);
		}
		
		function insert_j($no, $merk, $warna, $harga, $tempatfile){
			$query = "insert into tb_jam (no,merk_jam,warna,harga,gambar) 
			values ('$no', '$merk', '$warna', '$harga', '$tempatfile')";
			return $this->execute($query);
		}
		//akhir section jam

		function fetch($var){
			return mysqli_fetch_array($var);
		}

		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
	?>