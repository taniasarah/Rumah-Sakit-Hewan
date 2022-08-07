<!DOCTYPE html>
<head>
</head>
    <meta charset="utf-8">
    <title>Update Gambar</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<?php
    require_once("koneksi.php");
    $stmt = $pdo_conn->prepare("SELECT * FROM pic_ket where id="."'".$_GET['id']."'");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<body>
<center><h1>Edit Gambar</h1><center>

<div class="login">
<form name="frmAdd" action="update_dr.php" method="POST" enctype="multipart/form-data">
</br>
    
    <div class="text">
        <label>Id : </label><br>
        <input type="text" name="id" value="<?php echo $result[0]['id'];?>" readonly value=""/><br><br>
    </div>   
    
    <div class="text">
        <label>Update Gambar :<label></br></br>
        <input type="file" name="picture" required value="<?php echo $result[0]['picture']; ?>"/>
        <br><br>
    </div>

    <div class="text">
        <label>Nama Dokter :</label></br</br>
        <textarea name="nama_dr"><?php echo $result[0]['nama_dr'];?></textarea><br>
    </div>

    <input name="update_data" type="submit" value="Update" class="btn">
    <center><a href ="adminindex.php">Back</a></center>
    
</div>    
</form>
</body>
</html>