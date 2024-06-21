<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $nik = $_GET['hapus'];

    $delete_query = "DELETE FROM pembayaran WHERE nik = $nik";
    $koneksi->query($delete_query);
    header("Location: pembayaran.php");
}
?>