<?php
include 'koneksi.php';
 
$id_notulensi = $_GET['delete'];
 
$sql = "DELETE FROM notulensi WHERE id_notulensi='$id_notulensi'";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data berhasil dihapus');
        window.location.href=('datanotulensi.php');
        </script>";
}else{
    echo "error";
}
?>