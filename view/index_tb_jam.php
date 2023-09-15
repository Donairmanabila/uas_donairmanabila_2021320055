<html>
<head>
	<title>JAM TANGAN PRIA </title>
	<link rel="SHORTCUT ICON" href="image/jam.ico" >
	<tr style="background-color: pink;">
</head>
<body>
	<table border="4" cellpadding="30" cellspacing="0" align="center">
		<tr align="center">
			<td>Nomor Jam</td>
			<td>Merk Jam</td>
			<td>Warna Jam</td>
			<td>Harga Jam</td>
			<td>Gambar Jam</td>
			<td colspan="2">Aksi</td>
		</tr>
		<?php while($row = $this->model->fetch($data)){ ?>
			<tr>
				<td><?php echo $row['no'] ?></td>
				<td><?php echo $row['merk_jam']?></td>
				<td><?php echo $row['warna']?></td>
				<td><?php echo $row['harga']?></td>
				<?php if ($row['gambar'] != "") { ?>
					<td><img src="<?php echo $row['gambar']; ?>" width="50" height="50"></td>
				<?php }else{  ?>
					<td>Kosong</td>
				<?php } ?>
				<td><a href='index.php?eb=<?php echo $row['no'] ?>'>Edit</a>
					<a href='index.php?db=<?php echo $row['no'] ?>' 
					onClick="return confirm('Hapus Data?')">Delete</a></td>
				</tr>
			<?php } ?>

		</table>
		<center><a href='index.php?ib=tambah_tb_jam'>Tambah Data Jam</a> | 
		<a href='index.php?home'>Homepage</a></center>
	</body>
	</html>