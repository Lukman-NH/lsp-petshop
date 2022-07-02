<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE from brand where brand_id='$id'");


mysqli_query($koneksi,"UPDATE produk set produk_brand='1' where produk_brand='$id'");

header("location:brand.php");
