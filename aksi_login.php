<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $akun = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
    $result = $koneksi->query($akun);

    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username;
        header("Location:admin/index_admin.php");
    } else {
            $_SESSION['error'] = "Username atau password salah.";
            header("Location: login.php");
	}
}		
?>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
  }

  $username = $_SESSION['username'];
?>