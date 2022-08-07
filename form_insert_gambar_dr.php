<!DOCTYPE html>>
<html>
<head>
        <meta charset="utf-8">
        <title>Tambah Gambar</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
        </head>
<body>
<center><h1>Tambah Gambar</h1><center>

<div class="login">
<form name="frmAdd" action="tambah_dr.php" method="POST" enctype="multipart/form-data">
<br>

    <div class="text">
        <label>Pilih Gambar :</label><br>
        <input type = "file" name="picture"/></br></br>
    </div>

    <div class="text">
        <label>Nama Dr :</label><br>
        <textarea name="nama" placeholder="Masukkan Nama Dokter"></textarea></br></br>
    </div>

    <input name="tambah" type="submit" value="Insert" class="btn">
    <center><a href ="adminindex.php">Back</a></center>
</div>
</form>
</body>
</html>