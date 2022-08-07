<?php
require_once("koneksi.php");
session_name("verify");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $pdo_conn->prepare('SELECT * FROM user WHERE username = :username and password = :password');
$admin->execute(array(
                  ':username' => $_POST['userlog'],
                  ':password' => $_POST['passlog']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
if(empty($row['username']))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Username atau password yang Anda Masukkan Salah !!!");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
else 
{
    if($_POST['userlog'] == "admin"){
        header("location: adminindex.php");
    }
    else{
        $_SESSION['login_user'] = $_POST['user'];
        header("location: beranda.php");
    }
}
}
?>