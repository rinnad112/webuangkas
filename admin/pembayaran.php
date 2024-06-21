<!DOCTYPE html>
<html>
<head>
	<title>UANG KAS KARANG TARUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg" style ="background-color :#808080;color:#FFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index_admin.php">ANGGOTA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pembayaran.php">PEMBAYARAN</a>
</li>
<form action="pembayaran.php" method="post">

            <label for="bulan">Pilih Bulan:</label>
            <select name="bulan" id="bulan">
            <option value=""></option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>

            <label>Cari :</label>
	            <input type="text" name="cari">
                <input type="submit" value="Tampilkan">
    </form>
</div>
<div class="nav-item">
				<a class="btn btn-dark" href="logout.php">LOGOUT</a>
			</div>
      </ul>
    </div>
  </div>
</nav>
	<center><h2>PEMBAYARAN</h2></center>
	<br/>
	<a href="tambah2.php"class= "btn btn-secondary">+ TAMBAH DATA PEMBAYARAN</a>
	<br/>
	<br>
	<a href="cetak_pembayaran.php" class= "btn btn-secondary" target="_blank">CETAK</a>
	<br/>
	<table border="4"class="table bordered">
		<tr>
		<th style= "background-color:#808080; color:#fff;">NO</th>
		<th style= "background-color:#808080; color:#fff;">NIK</th>
		<th style= "background-color:#808080; color:#fff;">NAMA</th>
		<th style= "background-color:#808080; color:#fff;">BULAN</th>
		<th style= "background-color:#808080; color:#fff;">TAHUN</th>
		<th style= "background-color:#808080; color:#fff;">MINGGU KE-1</th>
		<th style= "background-color:#808080; color:#fff;">MINGGU KE-2</th>
		<th style= "background-color:#808080; color:#fff;">MINGGU KE-3</th>
		<th style= "background-color:#808080; color:#fff;">MINGGU KE-4</th>
		<th style= "background-color:#808080; color:#fff;">TENGGAT WAKTU</th>
		<th style= "background-color:#808080; color:#fff;">JUMLAH</th>
		<th style= "background-color:#808080; color:#fff;">OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		 // Proses pencarian
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$selectedMonth = $_POST["bulan"];
			$keyword = $_POST["cari"];
	
			$data = mysqli_query($koneksi, "SELECT * FROM vpembayaran  
            WHERE (bulan = '$selectedMonth' OR '$selectedMonth' = '')
              AND (nama LIKE '%$keyword%')");

		}else {
			$data = mysqli_query($koneksi, "SELECT * FROM vpembayaran ORDER BY nama ASC");
		  }
			  $no = 1;
			  while($d = mysqli_fetch_array($data)){
				  ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['bulan']; ?></td>
				<td><?php echo $d['tahun']; ?></td>
				<td><?php echo $d['minggu_1']; ?></td>
				<td><?php echo $d['minggu_2']; ?></td>
				<td><?php echo $d['minggu_3']; ?></td>
				<td><?php echo $d['minggu_4']; ?></td>
				<td><?php echo $d['tenggat_waktu']; ?></td>
				<td><?php echo $d['nominal']; ?></td>
				<td>
				<a href="edit2.php?nik=<?php echo $d['nik']; ?>"type="button" class="btn btn-warning">UBAH</a>
		        <a href="hapus2.php?hapus=<?php echo $d['nik'] ?>"type="button" class="btn btn-danger" onclick="confirm('Apakah anda yakin akan menghapus data ini?')">HAPUS</a>
			</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>