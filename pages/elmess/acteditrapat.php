<?php
include 'koneksi.php';
$id_rapat = $_POST['id_rapat'];
$judulrapat = $_POST['judulrapat'];
$divisi = $_POST['divisi'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$pelaksanaan = $_POST['pelaksanaan'];
$tempat = $_POST['tempat'];
$status = $_POST['status'];

$sql = "UPDATE rapat SET judulrapat='$judulrapat', divisi='$divisi', tanggal='$tanggal', waktu='$waktu', pelaksanaan='$pelaksanaan', tempat='$tempat', status='$status' WHERE id_rapat='$id_rapat'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datarapat.php');
}else{
    echo "error";
}
?>