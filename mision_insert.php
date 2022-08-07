<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO mision (mision_ket) VALUES (:mision_ket)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':mision_ket'=>$_POST['mision_ket'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "about_admin.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Gagal !");'; 
		echo 'window.location.href = "form_mision_insert.php";';
		echo '</script>';
	}
}


?>