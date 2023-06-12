<?php
include "koneksi.php";
$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$divisi = $_POST ['divisi'];
$jabatan = $_POST ['jabatan'];
$jeniskelamin = $_POST ['jeniskelamin'];
$tanggallahir = $_POST ['tanggallahir'];
$alamat = $_POST ['alamat'];
$nomortelepon = $_POST ['nomortelepon'];

$sql = "INSERT INTO karyawan (nama,email,divisi,jabatan,jeniskelamin,tanggallahir,alamat,nomortelepon)
        VALUES ('$nama','$email','$divisi','$jabatan','$jeniskelamin','$tanggallahir','$alamat','$nomortelepon')";
$a = $koneksi->query($sql);
if($a == true){
    echo "<script>
        alert ('Data telah ditambahkan');
        window.location.href=('datakaryawan.php');
        </script>";
}else{
    echo "error";
}
?>