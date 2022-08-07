<?php
require_once("koneksi.php");
if(!empty($_POST["update_data"])) {
	$pdo_statement=$pdo_conn->prepare("UPDATE about_des_dua set
	 id='" . $_POST[ 'id' ] . "', 
	 deskripsi_dua='" . $_POST[ 'deskripsi_dua' ] . "'
	 where id=" . $_POST["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		echo '<script type="text/javascript">'; 
            echo 'alert("Keterangan Berhasil Diupdate !");'; 
            echo 'window.location.href = "about_admin.php";';
            echo '</script>';
	}
	else{
        echo '<script type="text/javascript">'; 
        echo 'alert("Pembaruan Gagal !");'; 
        echo 'window.location.href = "form_about_deskripsi2_update.php";';
        echo '</script>';
    }
}
?>