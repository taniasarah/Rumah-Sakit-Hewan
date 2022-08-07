<?php
require_once("koneksi.php");
if(!empty($_POST["update_data"])) {
	$pdo_statement=$pdo_conn->prepare("UPDATE vision set
	 id='" . $_POST[ 'id' ] . "', 
     vision_ket='" . $_POST[ 'vision_ket' ] . "'
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
        echo 'window.location.href = "form_vision_update.php";';
        echo '</script>';
    }
}
?>