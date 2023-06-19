<?php
include "koneksi.php";
$judulrapat = $_POST['judulrapat'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pelaksanaan = $_POST['pelaksanaan'];
$tempat = $_POST['tempat'];

$sql = "INSERT INTO rapat (judulrapat,nama,tanggal,waktu,pelaksanaan,tempat)
        VALUES ('$judulrapat','$nama','$tanggal','$waktu','$pelaksanaan','$tempat')";
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