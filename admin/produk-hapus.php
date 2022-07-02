<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * from produk where produk_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['produk_foto'];

unlink("../img/product/$foto");

mysqli_query($koneksi, "DELETE from produk where produk_id='$id'");




$data = mysqli_query($koneksi, "SELECT * from transaksi where transaksi_produk='$id'");
while($d=mysqli_fetch_array($data)){
	$id_invoice = $d['transaksi_invoice'];

	mysqli_query($koneksi, "DELETE from invoice where invoice_id='$id'");
}

mysqli_query($koneksi, "DELETE from transaksi where transaksi_produk='$id'");

header("location:produk.php");
