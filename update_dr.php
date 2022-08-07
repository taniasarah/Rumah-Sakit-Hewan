<?php
    require_once("koneksi.php");

    $nama = $_FILES['picture']['name'];
    $file = $_FILES['picture']['tmp_name'];
    $folder = './img/';
    
    $cek = move_uploaded_file($file, $folder.$nama);

    if($cek){
        $stmt=$pdo_conn->prepare("UPDATE pic_ket set
        id=:id,
        picture=:picture,
        nama_dr=:nama_dr
        where id=:id");

        $stmt->bindParam(':id', $_POST["id"]);
        $stmt->bindParam(':picture', $nama);
        $stmt->bindParam(':nama_dr', $_POST["nama_dr"]);
        $result = $stmt->execute();
        if($result) {
            echo '<script type="text/javascript">'; 
            echo 'alert("Berhasil Diupdate !");'; 
            echo 'window.location.href = "adminindex.php";';
            echo '</script>';
        }
    }
    else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Upload File Gagal !");'; 
        echo 'window.location.href = "form_update_gambar_dr.php";';
        echo '</script>';
    }
    
?>