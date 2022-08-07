<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="fonts/login/font/flaticon.css">
    </head>

    <body class="signup">        
        <div class="login">
        <form name="SignUp" method="POST">
            <br>
            <div class="text">
                <i class="flaticon-005-id-card" aria-hidden="true"></i>
                <input type="text" name="nama" required placeholder="Nama"/>
            </div>
            <div class="text">
                <i class="flaticon-017-user" aria-hidden="true"></i>
                <input type="text" name="username" required placeholder="Username"/>
            </div>
            <div class="text">
                <i class="flaticon-009-lock" aria-hidden="true"></i>
                <input type="password" name="password" required placeholder="Password"/>
            </div>
            <input class="btn" type="submit" name="sign_up" value="Daftar">
            <center><a href="index.php">Back</a></center>
        </form>
        </div>
    </body>
</html>

<?php
    if(!empty($_POST["sign_up"])) {
        require_once("koneksi.php");
        $sql = "INSERT INTO user (nama, username, password) VALUES (:nama, :username, :password)";
        $stmt = $pdo_conn->prepare( $sql );
        $result = $stmt->execute( array
        (':nama'=>$_POST['nama'],
        ':username'=>$_POST['username'], 
        ':password'=>$_POST['password'] ));
        if (!empty($result) ){
            echo '<script type="text/javascript">'; 
            echo 'alert("Selamat Datang !");'; 
            echo 'window.location.href = "beranda.php";';
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Username Tidak Tersedia !");'; 
            echo 'window.location.href = "sign_up.php";';
            echo '</script>';
        }
    }
?>

