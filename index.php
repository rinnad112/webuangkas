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
          <a class="nav-link" href="login.php">LOG IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">ANGGOTA</a>
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
      </ul>
    </div>
  </div>
</nav>
<br>
	<center><h2>DATA ANGGOTA</h2></center>
	<br/>
	 <br/>
	 
	<table border="4"class="table bordered">
		<tr>
		<th style= "background-color:#808080; color:#fff;">NO</th>
		<th style= "background-color:#808080; color:#fff;">NIK</th>
		<th style= "background-color:#808080; color:#fff;">NAMA</th>
		<th style= "background-color:#808080; color:#fff;">NO.TELEPON</th>
	 
             
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
			    
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>