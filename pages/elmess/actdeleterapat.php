<?php
include 'koneksi.php';
 
$id_rapat = $_GET['delete'];
 
$sql = "DELETE FROM rapat WHERE id_rapat='$id_rapat'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datarapat.php');
        </script>";
}else{
    echo "error";
}
?>