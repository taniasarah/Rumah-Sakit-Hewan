<?php
require_once("koneksi.php");
$stmt=$pdo_conn->prepare("DELETE from about_des_dua where id=" . $_GET['id']);
$stmt->execute();
echo '<script type="text/javascript">'; 
    echo 'alert("Deskripsi Berhasil Dihapus !");'; 
    echo 'window.location.href = "about_admin.php";';
    echo '</script>';
?>