<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAM TANGAN PRIAA</title>
</head>
<body>
    <fieldset>
        <center><b><h3>Edit Daata Jam</h3></b></center>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" style="margin-bottom: 15px">
                <label for="no">No :</label>
                <input type="text" name="no_jam" value="<?php echo $row[1] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="merk_jam">Merk :</label>
                <input type="text" name="merk_jam" value="<?php echo $row[2] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="warna">Warna :</label>
                <input type="text" name="warna" value="<?php echo $row[3] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="harga">Harga :</label>
                <input type="text" name="harga" value="<?php echo $row[4] ?>">
            </div>
            <div class="form-group" style="margin-bottom: 15px">
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar">
            </div>
            <input type="hidden" name="no" value="<?=$row[0]?>">
            <input type="submit" name="submit"/> <a href="index.php?idb=index_tb_jam">Kembali</a>
        </form>
    </fieldset>
</body>
</html>
<?php
    if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
        $main = new controller();
        $main->update_tb_jam();
        }
        ?>