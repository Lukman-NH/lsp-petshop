<?php
include '../koneksi.php';

$id  = $_POST['id'];
$nama  = $_POST['nama'];
$email  = $_POST['email'];
$phone  = $_POST['phone'];
$password  = md5($_POST['password']);

if($_POST['password'] == ""){

	mysqli_query($koneksi, "UPDATE pelanggan set 
                            pelanggan_nama='$nama', 
                            pelanggan_email='$email', 
                            pelanggan_phone='$phone'
                            where pelanggan_id='$id'");

}else{
	mysqli_query($koneksi, "UPDATE pelanggan set 
                            pelanggan_nama='$nama', 
                            pelanggan_email='$email', 
                            pelanggan_phone='$phone',
                            pelanggan_password='$password' 
                            where pelanggan_id='$id'");

}

header("location:pelanggan.php");
?>