<!DOCTYPE html>>
<html>
<head>
        <meta charset="utf-8">
        <title>Tambah Keterangan</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
<center><h1>Edit Keterangan</h1></center>

<div class="login">
<form name="frmAdd" action="tambahket.php" method="POST">
</br>

    <div class="text">
        <label>Judul : </label></br>
        <textarea name="judul_ket" placeholder="Masukkan Judul Keterangan"></textarea></br></br>
    </div>

    <div class="text">
        <label>Keterangan : </label></br>
        <textarea name="des_vet" placeholder="Masukkan Keterangan"></textarea>
    </div>

    <input name="tambah data" type="submit" value="Insert" class="btn">
    <center><a href ="adminindex.php">Back</a></center>
</div>
</form>
</body>
</html>