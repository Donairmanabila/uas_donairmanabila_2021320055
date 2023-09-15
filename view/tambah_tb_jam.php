<?php
//pembuatan  otomatis
$r = $this->model->fetch($data);
$no = (int) substr($r['no'],3,8);
$tambah=$no+1;
if($tambah<10){
    $id="JM"."00".$tambah;
}else{
    $id="JM"."0".$tambah;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Data Jam</title>
</head>
<body>
    <fieldset>
        <center><b><h3>Tambah Data Jam</h3></b></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px">
                <label for="no"> No:</label>
                <input type="text" name="no_jam" value="<?php echo $id ?>" readonly>
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="merk_jam">Merk	:</label>
                <input type="text" name="merk_jam">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="warna">Warna	:</label>
                <input type="text" name="warna">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="harga">Harga	:</label>
                <input type="text" name="harga">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="gambar">Upload Gambar	:</label>
                <input type="file" name="gambar">
            </div>
            <input type="submit" name="submit"/> <a href="index.php?idb=index_jam">Kembali</a>
        </form>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
        $main = new controller();
        $main->insert_tb_jam();
    }

?>