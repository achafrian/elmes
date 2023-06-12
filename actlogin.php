<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE username='$username' 
    AND password='$password'");

if (mysqli_num_rows($sql) == 1) {
    $a = $sql->fetch_array();

    if ($a['level'] == 'admin') {
        //admin
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        echo "<script>
        alert ('Sukses Login');
        window.location.href=('pages/elmess');
        </script>";
    } else if ($a['level'] == 'user') {
        //user
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        echo "<script>
        alert ('Sukses Login');
        window.location.href=('pages/elmes');
        </script>";
    } else {
        echo "<script>
        alert ('Gagal Login');
        window.location.href=('index.php');
        </script>";
    }
    } else {
        echo "<script>
        alert ('username atau password salah');
        window.location.href=('index.php');
        </script>";
    }
?>
