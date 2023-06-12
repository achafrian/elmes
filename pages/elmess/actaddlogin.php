<?php
include "koneksi.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql = "INSERT INTO registrasi (username,email,password,level)
        VALUES ('$username','$email','$password','$level')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datalogin.php');
        </script>";
}else{
    echo "error";
}
?>