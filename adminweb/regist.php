<?php
if (isset($_POST['user'])) {
include "koneksi.php";
$sql = "INSERT INTO admin (user, pass, nama) VALUES 
( '".$_POST['user']."',
  '".$_POST['pass']."',
  '".$_POST['nama']."')";
      $insert = mysqli_query($koneksi, $sql)
      or die(mysqli_error($koneksi));
      if ($insert) { // Jika berhasil
        // Tampilkan sebuah pesan
        echo '<script>alert("Selamat! Registrasi anda berhasil")</script>';
			echo '<script>window.location="login.php"</script>';

      } else { // Jika tidak berhhasil
        // Tampilkan pesan
        echo '<h1>Sistem Error/h1>
             <p class="error">Anda tidak dapat terdaftar
             karena adanya gangguan sistem.
              Mohon maaf atas ketidak-nyamanan ini.</p><br>
              Silahkan login klik disini <a href="../adminweb/login.php">Login</a>';
    }
  }else{
  header('Location:login.php');

}
?>