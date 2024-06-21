<?php 
 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
 
 
mysqli_query($koneksi,"UPDATE anggota SET nik='$nik', nama='$nama', no_telepon='$no_telepon' WHERE nik='$nik'");
 
header("location:index_admin.php?pesan=update");
 
?>