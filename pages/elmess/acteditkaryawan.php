<?php
include 'koneksi.php';
$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$divisi = $_POST ['divisi'];
$jabatan = $_POST ['jabatan'];
$jeniskelamin = $_POST ['jeniskelamin'];
$tanggallahir = $_POST ['tanggallahir'];
$alamat = $_POST ['alamat'];
$nomortelepon = $_POST ['nomortelepon'];
 
$sql = "UPDATE karyawan SET nama='$nama', email='$email', divisi='$divisi', jabatan='$jabatan', jeniskelamin='$jeniskelamin', tanggallahir='$tanggallahir', alamat='$alamat', nomortelepon='$nomortelepon' WHERE id_karyawan='$id_karyawan'";
$a = $koneksi->query($sql);
if($a == true){
    header('location: datakaryawan.php');
}else{
    echo "error";
}
?>