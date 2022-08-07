<!DOCTYPE html>>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Keterangan</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>    

<body>

<center><h1>Tambah Deskripsi</h1></center>

<div class="login">
<form name="frmAdd" action="about_deskripsi2_insert.php" method="POST">
    <br>

    <div class="text">
        <label>Deskripsi : </label></br>
        <textarea name="deskripsi_dua" placeholder="Masukkan Deskripsi"></textarea></br></br>
    </div>

    <input name="tambah data" type="submit" value="Insert" class="btn">
    <center><a href ="about_admin.php">Back</a></center>
</div>
</form>
</body>
</html>