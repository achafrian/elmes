<?php
include 'koneksi.php';
$id_notulensi = $_POST['id_notulensi'];
$id_rapat = $_POST['id_rapat'];
$notulensi = $_POST['notulensi'];
$statuss = $_POST['statuss'];
 
$sql = "UPDATE notulensi SET id_rapat='$id_rapat', notulensi='$notulensi', statuss='$statuss' WHERE id_notulensi='$id_notulensi'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datanotulensi.php');
}else{
    echo "error";
}
?>