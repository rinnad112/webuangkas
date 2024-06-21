<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$tenggat_waktu = $_POST['tenggat_waktu'];
$jumlah = $_POST['jumlah'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT into pembayaran values('$nik','$nama','$bulan','$tahun','$m1', '$m2', '$m3', '$m4', '$tenggat_waktu','$jumlah')");
 
// mengalihkan halaman kembali ke index.php                       
header("location:pembayaran.php");
 
?>