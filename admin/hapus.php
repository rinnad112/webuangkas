<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $nik = $_GET['hapus'];

    $delete_query = "DELETE FROM anggota WHERE nik = $nik";
    $koneksi->query($delete_query);
    header("Location: index_admin.php");
}
?>