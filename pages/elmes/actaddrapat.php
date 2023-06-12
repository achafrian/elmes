<?php
include "koneksi.php";
$judulrapat = $_POST['judulrapat'];
$divisi = $_POST['divisi'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pelaksanaan = $_POST['pelaksanaan'];
$tempat = $_POST['tempat'];

$sql = "INSERT INTO rapat (judulrapat,divisi,tanggal,waktu,pelaksanaan,tempat)
        VALUES ('$judulrapat','$divisi','$tanggal','$waktu','$pelaksanaan','$tempat')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datarapat.php');
        </script>";
}else{
    echo "error";
}
?>