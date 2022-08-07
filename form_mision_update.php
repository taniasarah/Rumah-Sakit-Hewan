<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Keterangan</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<?php
    require_once("koneksi.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM mision where id="."'".$_GET['id']."'");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<body>
<center><h1>Edit Mision</h1></center>

<div class="login">
<form name="frmAdd" action="mision_update.php" method="POST">
</br>

    <div class="text">
        <label>Id : </label></br>
        <input type="text" name="id" value="<?php echo $result[0]['id'];?>" readonly value=""/></br></br>
    </div>

    <div class="text">
        <label>Update Mision : </label></br>
        <textarea name="mision_ket" placeholder="Masukkan Mision"><?php echo $result[0]['mision_ket'];?></textarea></br></br>
    </div>

    <input name="update_data" type="submit" value="Update" class="btn">
    <center><a href ="form_mision_update.php">Back</center></a>
</div>
</form>
</body>
</html>

