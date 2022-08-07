<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Tambah Vision</title>
        <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>

<?php
    require_once("koneksi.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM vision where id="."'".$_GET['id']."'");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<body>
<center><h1>Edit Vision</h1></center>

<div class="login">
<form name="frmAdd" action="vision_update.php" method="POST">
</br>

    <div class="text">
        <label>Id : </label></br>
        <input type="text" name="id" value="<?php echo $result[0]['id'];?>" readonly value=""/></br></br>
    </div>  
    
    <div class="text">
        <label>Update Keterangan : </label></br>
        <textarea name="vision_ket" placeholder="Masukkan keterangan"><?php echo $result[0]['vision_ket'];?></textarea></br></br>
    </div>

    <input name="update_data" type="submit" value="Update" class="btn">
    <center><a href ="form_vision_update.php">Back</a></center>
</div>
</form>
</body>
</html>

