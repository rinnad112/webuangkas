<?php 
 
 include 'koneksi.php';
 $nik = $_POST['nik'];
 $nama = $_POST['nama'];
 $bulan = $_POST['bulan'];
 $tahun = $_POST['tahun'];
 $minggu_1 = $_POST['minggu_1'];
 $minggu_2 = $_POST['minggu_2'];
 $minggu_3 = $_POST['minggu_3'];
 $minggu_4 = $_POST['minggu_4'];
 $tenggat_waktu = $_POST['tenggat_waktu'];
 $jumlah = $_POST['jumlah'];
  
 mysqli_query($koneksi,"UPDATE pembayaran SET nik='$nik', nama='$nama', bulan='$bulan', tahun='$tahun', minggu_1='$minggu_1', minggu_2='$minggu_2', minggu_3='$minggu_3', minggu_4='$minggu_4', tenggat_waktu='$tenggat_waktu',jumlah='$jumlah' WHERE nik='$nik'");
  
 header("location:pembayaran.php?pesan=update");
  
 ?>