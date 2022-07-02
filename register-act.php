<?php 
include 'koneksi.php';

  $nama  = $_POST['nama'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = md5($_POST['password']);

$cek_email = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE pelanggan_email='$email'");
  if(mysqli_num_rows($cek_email) > 0){
    header("location:register.php?alert=duplikat");
  }
  else{
    mysqli_query($koneksi, 
          "INSERT INTO pelanggan VALUES (
            NULL,
            '$nama',
            '$email',
            '$phone',
            '$password')");
    header("location:login.php?alert=terdaftar");
}
