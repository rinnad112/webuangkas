<!DOCTYPE html>
<html>
<head>
	<title>DATA ANGGOTA</title>
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
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</head>
<body>
 
	<br/>
	<a href="index_admin.php"class= "btn btn-secondary">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA ANGGOTA</h3>
 
	<?php
	include 'koneksi.php';
	$nik = $_GET['nik'];
	$data = mysqli_query ($koneksi,"select * from anggota WHERE nik='$nik'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>NIK</td>
					<td><input type="text" name="nik" value="<?php echo $d['nik']; ?>"></td>
				</tr>
				<tr>
				    <td>NAMA</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>NO TELEPON</td>
					<td><input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>