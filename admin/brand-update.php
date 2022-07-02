<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$nama  = $_POST['nama'];

mysqli_query($koneksi, "UPDATE brand set brand_nama='$nama' where brand_id='$id'");
header("location:brand.php");