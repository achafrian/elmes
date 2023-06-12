<?php
include 'koneksi.php';
 
$id_registrasi = $_GET['delete'];
 
$sql = "DELETE FROM registrasi WHERE id_registrasi='$id_registrasi'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datalogin.php');
        </script>";
}else{
    echo "error";
}
?>