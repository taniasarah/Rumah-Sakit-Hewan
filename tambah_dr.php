<?php
    if(!empty($_POST["tambah"])) {
        require_once("koneksi.php");

        $nama = $_FILES['picture']['name'];
        $file = $_FILES['picture']['tmp_name']; 
        $folder ='./img/';
       
        $cek = move_uploaded_file($file, $folder.$nama);
        
        if($cek){
            $sql = "INSERT INTO pic_ket (picture, nama_dr) VALUES (:picture, :nama_dr)";
            $stmt = $pdo_conn->prepare( $sql );
            $result = $stmt->execute(array 
            (':picture'=>$nama, 
            ':nama_dr'=>$_POST['nama']));
            if (!empty($result) ){
                echo '<script type="text/javascript">'; 
                echo 'alert("Berhasil Ditambahkan!");'; 
                echo 'window.location.href = "adminindex.php";';
                echo '</script>';
            }
        }
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Upload File Gagal !");'; 
            echo 'window.location.href = "form_insert_gambar_dr.php";';
            echo '</script>';
        }
        
    }
?>
