<?php
include "koneksi.php";
$id_rapat = $_POST['id_rapat'];
$notulensi = $_POST['notulensi'];

$sql = "INSERT INTO notulensi (id_rapat,notulensi)
        VALUES ('$id_rapat','$notulensi')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datanotulensi.php');
        </script>";
}else{
    echo "error";
}
?>