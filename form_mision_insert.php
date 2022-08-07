<!DOCTYPE html>>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Keterangan</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
<center><h1>Tambah Mision</h1></center>

<div class="login">
<form name="frmAdd" action="mision_insert.php" method="POST">
</br>

    <div class="text">
        <label>Masukkan Keterangan : </label></br>
        <textarea name="mision_ket" placeholder="Masukkan keterangan"></textarea></br></br>
    </div>

    <input name="tambah data" type="submit" value="Insert" class="btn">
    <center><a href ="about_admin.php">Back</center></a>
</div>
</form>
</body>
</html>