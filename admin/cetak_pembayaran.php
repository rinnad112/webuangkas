<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA LAPORAN PEMBAYARAN</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>BULAN_TAHUN</th>
			<th>MINGGU KE-1</th>
			<th>MINGGU KE-2</th>
            <th>MINGGU KE-3</th>
			<th>MINGGU KE-4</th>
            <th>TENGGAT WAKTU</th>
			<th>JUMLAH</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * from vpembayaran");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['bulan_tahun']; ?></td>
			<td><?php echo $data['m1']; ?></td>
			<td><?php echo $data['m2']; ?></td>
            <td><?php echo $data['m3']; ?></td>
			<td><?php echo $data['m4']; ?></td>
            <td><?php echo $data['tenggat_waktu']; ?></td>
			<td><?php echo $data['jumlah_bayar']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>