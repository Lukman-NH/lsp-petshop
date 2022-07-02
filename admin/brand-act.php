<?php 
include '../koneksi.php';
$nama  = $_POST['nama'];

mysqli_query($koneksi, "INSERT into brand VALUES (NULL,'$nama')");
header("location:brand.php");