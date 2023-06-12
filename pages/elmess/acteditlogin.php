<?php
include 'koneksi.php';
$id_registrasi = $_POST['id_registrasi'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST ['password'];
$level = $_POST ['level'];
 
$sql = "UPDATE registrasi SET username='$username', email='$email', password='$password', level='$level' WHERE id_registrasi='$id_registrasi'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datalogin.php');
}else{
    echo "error";
}
?>