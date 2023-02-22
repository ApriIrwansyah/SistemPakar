<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query    = "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'";
$runquery = $koneksi->query($query);

if($runquery->num_rows > 0){
   session_start();
   $_SESSION['admin'] = $username;
   header("Location: index.php");
} else {
   echo '<h1>Username atau Kata Sandi Salah!</h1>';
   header("location:login.php");
}

?>