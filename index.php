<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="fonts/login/font/flaticon.css">
    </head>

    <body class="li">        
        <div class="login">
        <form action="ceklogin.php" method="post">
            <div class="text">
                <i class=flaticon-005-id-card aria-hidden="true"></i>
                <input type="text" name="userlog" required placeholder="Username"/>
            </div>
            <div class="text">
                <i class="flaticon-009-lock" aria-hidden="true"></i>
                <input type="password" name="passlog" required placeholder="Password"/>
            </div>
            <input class="btn" type="submit" name="login" value="Login">
            <div class="ket">
                <center><p>Tidak punya akun ? <a href="sign_up.php">Daftar</a></p></center>
            </div>
        </form>
        </div>
    </body>
</html>