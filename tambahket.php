<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO ket_vet (judul_ket, des_vet) VALUES (:judul_ket, :des_vet)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':judul_ket'=>$_POST['judul_ket'],':des_vet'=>$_POST['des_vet'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Keterangan Berhasil Ditambahkan !");'; 
		echo 'window.location.href = "adminindex.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Penambahan Keterangan Gagal !");'; 
		echo 'window.location.href = "forminsertket.php";';
		echo '</script>';
	}
}


?>