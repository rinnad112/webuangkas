<!DOCTYPE html>
<html>
<head>
	<title>UANG KAS KARANG TARUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>
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
<form class="d-flex" role="search">
<!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>
  </form>
</div>
<div class="nav-item">
				<a class="btn btn-dark" href="logout.php">LOGOUT</a>
			</div>
      </ul>
    </div>
  </div>
</nav>
	<center><h2>DATA ANGGOTA</h2></center>
	<br/>
	<a href="tambah.php"class= "btn btn-secondary">+ TAMBAH DATA</a>
	<br/>
	<br/>
	<table border="4"class="table bordered">
		<tr>
		<th style= "background-color:#808080; color:#fff;">NO</th>
		<th style= "background-color:#808080; color:#fff;">NIK</th>
		<th style= "background-color:#808080; color:#fff;">NAMA</th>
		<th style= "background-color:#808080; color:#fff;">NO.TELEPON</th>
		<th style= "background-color:#808080; color:#fff;">OPSI</th>
             
		</tr>
		<?php
	include 'koneksi.php';
		// Proses pencarian
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE nik LIKE '%$cari%' OR nama LIKE '%$cari%' OR no_telepon LIKE '%$cari%'");
    } else {
      $data = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY nama ASC");
    }
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nik']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['no_telepon']; ?></td>
				<td>
			    <a href="edit.php?nik=<?php echo $d['nik'];?>"type="button" class="btn btn-warning">UBAH</a>
				<a href="hapus.php?hapus=<?php echo $d['nik'];?>"type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">HAPUS</a> 
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>