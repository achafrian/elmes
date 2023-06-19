<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
</head>
<body>
    <?php
        $host = "localhost"; //untuk host
        $username = "root"; //untuk username
        $password = ""; //untuk password
        $database = "rapat"; //untuk nama database
        $koneksi = mysqli_connect($host, $username, $password, $database);
        
        if($koneksi){
            echo "";
        } else {
            echo "Server Not Connected";
        }
    ?>
</body>
</html>
