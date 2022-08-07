<?php
    require_once("koneksi.php");
    $stmt=$pdo_conn->prepare("DELETE from pic_ket WHERE id=" ."'" . $_GET['id'] . "'");
    $stmt->execute();
    echo '<script type="text/javascript">'; 
    echo 'alert("Foto Dokter Berhasil Dihapus !");'; 
    echo 'window.location.href = "adminindex.php";';
    echo '</script>';
?>
