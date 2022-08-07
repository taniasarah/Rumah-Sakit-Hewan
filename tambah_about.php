<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO about_judul (about_judul_ket, about_ket) VALUES (:about_judul_ket, :about_ket)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':about_judul_ket'=>$_POST['about_judul_ket'],':about_ket'=>$_POST['about_ket'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "about_admin.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Gagal !");'; 
		echo 'window.location.href = "form_about_admin_judul_tambah.php";';
		echo '</script>';
	}
}
?>