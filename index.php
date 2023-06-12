<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/logo.png">

    <!-- ===== CSS ===== -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Login Form -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <center>
                <img src="assets/img/elmess.png" height="36" width="106" alt="ELMES">
                </center>
                <div class="title">Masuk</div>
                <form action="actlogin.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Ingat saya</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Masuk">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Belum punya akun?
                        <a href="registrasi.php" class="text">Daftar sekarang</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="script.js"></script> -->
    <script type="text/javascript" src="script.js"></script>

</body>
</html>