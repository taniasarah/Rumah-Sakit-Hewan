<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO about_des_satu (deskripsi_satu) VALUES (:deskripsi_satu)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array(':deskripsi_satu'=>$_POST['deskripsi_satu'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "about_admin.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Gagal !");'; 
		echo 'window.location.href = "form_about_deskripsi1_insert.php";';
		echo '</script>';
	}
}


?>