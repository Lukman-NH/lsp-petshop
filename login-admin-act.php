<?php
//koneksi kedatabase
include('koneksi.php');
// mengambil data yg diinput dari form
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

$admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE 
                                  admin_email='$email' AND 
                                  admin_password='$password'");
$cek = mysqli_num_rows($admin);

  if($cek > 0){
    session_start();
    $data = mysqli_fetch_assoc($admin);
    $_SESSION['id'] = $data['admin_id'];
    $_SESSION['nama'] = $data['admin_nama'];
    $_SESSION['email'] = $data['admin_email'];
    $_SESSION['status'] = "login";
    
    header("location:admin/");
  }
  else {
    header("location:login-admin.php?alert=gagal");
  }
?>