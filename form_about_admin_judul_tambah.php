<!DOCTYPE html>>
<html>
<head>  
        <meta charset="utf-8">
        <title>Tambah Keterangan</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
        </head>
<body>
        <center>
        <h1>Tambah Keterangan</h1>
        </center>
        <div class="login">
        <form name="frmAdd" action="tambah_about.php" method="POST">
        <br>
        
        <div class="text">
        <label>Judul : </label></br>
        <textarea name="about_judul_ket" placeholder="Masukkan Judul Keterangan"></textarea></br></br>
        </div>

        <div class="text">
        <label>Keterangan : </label></br>
        <textarea name="about_ket" placeholder="Masukkan Deskripsi"></textarea></br></br>
    </div>
   
    <input name="tambah data" type="submit" value="Insert" class="btn"></br></br>
    <center>
    <a href ="about_admin.php">Back</a>
</center>
</div>
</form>
</body>
</html>