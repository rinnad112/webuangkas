<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
        /* Styling untuk form */
        .form-container {
            width: 500px;
            margin: 0 auto;
            padding: 60px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #808080;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #A0522D;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PEMBAYARAN </title>
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
          <a class="nav-link active" aria-current="page" href="index.php">ANGGOTA</a>
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
<li><a href="pembayaran.php" class= "btn btn-secondary">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['nik']) && isset($_POST['nama']) && isset($_POST['bulan']) && isset($_POST['tahun']) && isset($_POST['m1'])  && isset($_POST['m2'])  && isset($_POST['m3'])  && isset($_POST['m4'])  && isset($_POST['tenggat_waktu']) && isset($_POST['jumlah'])) {
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

    $query = "INSERT INTO pembayaran (nik,nama,bulan,tahun,m1,m2,m3,m4,tenggat_waktu,jumlah) VALUES ('$nik', '$nama', '$bulan','$tahun', '$m1',  '$m2', '$m3',  '$m4',  '$tenggat_waktu', '$jumlah')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data Berhasil Ditambahkan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}


mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>DATA PEMBAYARAN</h2>
                <form action="input-aksi2.php" method="post">
                    <label for="nik">NIK:</label>
                    <td><select name="nik">
				

                <option value="">-----</option>
           <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, "SELECT nik,nama FROM anggota") or die (mysqli_error($koneksi));

                while($data = mysqli_fetch_array($query)){
              echo "<option value=$data[nik]>$data[nama]$data[nik]</option>";
                }                          
                ?>
 </select></td>
                    <label for="nama">NAMA:</label>
                    <input type="text" id="nama" name="nama"><br>
                    <label for="bulan">BULAN:</label>
                    <input type="text" id="bulan" name="bulan"><br>
                    <label for="tahun">TAHUN:</label>
                    <input type="text" id="tahun" name="tahun"><br>
                    <label for="m1">MINGGU KE-1:</label>
                    <input type="text" id="m1" name="m1"><br>
                    <label for="m2">MINGGU KE-2:</label>
                    <input type="text" id="m2" name="m2"><br>
                    <label for="m3">MINGGU KE-3:</label>
                    <input type="text" id="m3" name="m3"><br>
                    <label for="m4">MINGGU KE-4:</label>
                    <input type="text" id="m4" name="m4"><br>
					<label for="tenggat_waktu">TENGGAT WAKTU:</label>
                    <input type="date" id="tenggat_waktu" name="tenggat_waktu"><br>
					<label for="jumlah">JUMLAH:</label>
                    <input type="text" id="jumlah" name="jumlah"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>