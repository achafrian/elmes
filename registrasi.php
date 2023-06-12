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
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="forms">

            <!-- Registration Form -->
            <div class="form signup">
                <center>
                <img src="assets/img/elmess.png" height="36" width="106" alt="ELMES">
                </center>
                <div class="title">Masuk</div>
                <form action="actregistrasi.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username" name="username" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Create a password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Registrasi">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Sudah punya akun?
                        <a href="index.php" class="text login-link">Masuk</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="script.js"></script> -->
    <script type="text/javascript" src="script.js"></script>

</body>
</html>