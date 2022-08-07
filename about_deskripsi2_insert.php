<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO about_des_dua (deskripsi_dua) VALUES (:deskripsi_dua)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array(':deskripsi_dua'=>$_POST['deskripsi_dua'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "about_admin.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Gagal !");'; 
		echo 'window.location.href = "form_about_deskripsi2_insert.php";';
		echo '</script>';
	}
}
?>