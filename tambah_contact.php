<?php
if(!empty($_POST["tambah_data"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO contact (nama, no_telp, email, pesan) VALUES (:nama, :no_telp, :email, :pesan)";
	$stmt = $pdo_conn->prepare( $sql );
    $result = $stmt->execute( array
    (':nama'=>$_POST['nama'],':no_telp'=>$_POST['no_telp'],
    ':email'=>$_POST['email'],':pesan'=>$_POST['pesan'] ));
	if (!empty($result) ){
		echo '<script type="text/javascript">'; 
		echo 'alert("Pesan Akan Kami Balas Secepatnya !");'; 
		echo 'window.location.href = "contact.php";';
		echo '</script>';
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Ups Sepertinya ada yang salah !");'; 
		echo 'window.location.href = "contact.php";';
		echo '</script>';
	}
}


?>