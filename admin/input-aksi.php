<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into anggota values('$nik','$nama','$no_telepon')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:index_admin.php");
 
?>