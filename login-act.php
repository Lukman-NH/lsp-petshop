<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

$login = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE 
									pelanggan_email='$email' AND 
									pelanggan_password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);

	// hapus session yg lain, agar tidak bentrok dengan session
	unset($_SESSION['id']);
	unset($_SESSION['nama']);
	unset($_SESSION['email']);
	unset($_SESSION['status']);

	// buat session pelanggan
	$_SESSION['pelanggan_id'] = $data['pelanggan_id'];
	$_SESSION['pelanggan_status'] = "login";
	header("location:index.php");
}
  else{
	  header("location:login.php?alert=gagal");
}