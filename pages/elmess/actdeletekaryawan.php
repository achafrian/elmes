<?php
include 'koneksi.php';
 
$id_karyawan = $_GET['delete'];
 
$sql = "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datakaryawan.php');
        </script>";
}else{
    echo "error";
}
?>