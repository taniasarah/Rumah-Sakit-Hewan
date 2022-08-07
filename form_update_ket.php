<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Keterangan</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<?php
    require_once("koneksi.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM ket_vet where id="."'".$_GET['id']."'");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<body>
<center><h1>Update Keterangan</h1></center>

<div class="login">
<form name="frmAdd" action="update_ket.php" method="POST">
</br>

    <div class="text">
        <label>Id : </label></br>
        <input type="text" name="id" value="<?php echo $result[0]['id'];?>" readonly value=""/></br></br>
    </div>

    <div class="text">
        <label>Judul : </label></br>
        <textarea name="judul_ket"  placeholder="Edit Judul Keterangan"><?php echo $result[0]['judul_ket'];?></textarea></br></br>
    </div>

    <div class="text">
        <label>Deskripsi :</label></br>
        <textarea name="des_vet" placeholder="Edit Deskripsi"><?php echo $result[0]['des_vet'];?></textarea></br></br>
    </div>

    <input name="update_data" type="submit" value="Update" class="btn">
    <center><a href ="adminindex.php">Back</a></center>
</div>
</form>
</body>
</html>