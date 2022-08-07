<?php
require_once("koneksi.php");
$stmt=$pdo_conn->prepare("DELETE from about_judul where id=" . $_GET['id']);
$stmt->execute();
echo '<script type="text/javascript">'; 
    echo 'alert("Keterangan Berhasil Dihapus !");'; 
    echo 'window.location.href = "about_admin.php";';
    echo '</script>';
?>