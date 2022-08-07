<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Update Keterangan</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<?php
    require_once("koneksi.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM about_des_dua where id="."'".$_GET['id']."'");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<body>
<center><h1>Edit Keterangan</h1></center>

<div class="login">
<form name="frmAdd" action="about_deskripsi2_update.php" method="POST">
</br>

    <div class="text">
        <label>Id : </label></br>
        <input type="text" name="id" value="<?php echo $result[0]['id'];?>" readonly value=""/></br></br>
    </div>

        <div class="text">
        <label>Edit Deskripsi : </label></br>
        <textarea name="deskripsi_dua" placeholder="Edit Deskripsi"><?php echo $result[0]['deskripsi_dua'];?></textarea></br></br>
        </div>

    <input name="update_data" type="submit" value="Update" class="btn">
    <center><a href ="form_about_deskripsi2_update.php">Back</a></center>
</div>
</form>
</body>
</html>

