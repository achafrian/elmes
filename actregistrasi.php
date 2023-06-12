<?php
include "koneksi.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO registrasi (username,email,password,level)
        VALUES ('$username','$email','$password','user')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Registrasi berhasil');
        window.location.href=('index.php');
        </script>";
}else{
    echo "error";
}
?>