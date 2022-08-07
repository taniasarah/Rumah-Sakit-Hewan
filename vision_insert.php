<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO vision (vision_ket) VALUES (:vision_ket)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':vision_ket'=>$_POST['vision_ket'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "about_admin.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Gagal !");'; 
		echo 'window.location.href = "form_vision_insert.php";';
		echo '</script>';
	}
}


?>