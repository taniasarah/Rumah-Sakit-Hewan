<?php
require_once("koneksi.php");
if(!empty($_POST["update_data"])) {
	$pdo_statement=$pdo_conn->prepare("UPDATE ket_vet set
	 id='" . $_POST[ 'id' ] . "', 
	 judul_ket='" . $_POST[ 'judul_ket' ] . "', 
	 des_vet='" . $_POST[ 'des_vet' ]. "' 
	 where id=" . $_POST["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		echo '<script type="text/javascript">'; 
            echo 'alert("Keterangan Berhasil Diupdate !");'; 
            echo 'window.location.href = "adminindex.php";';
            echo '</script>';
	}
	else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Pembaruan Gagal !");'; 
        echo 'window.location.href = "form_update_ket.php";';
        echo '</script>';
    }
}
?>