<?php 
include '../koneksi.php';
$brand = $_POST['brand'];
$nama  = $_POST['nama'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];

$rand = rand();
$allowed =  array('png','jpg','jpeg');

$filename1 = $_FILES['foto']['name'];

mysqli_query($koneksi, "INSERT into produk values(
                        NULL,
                        '$brand',
                        '$nama',
                        '$harga',
                        '$berat',
                        '$deskripsi',
                        '')");


$last_id = mysqli_insert_id($koneksi);


if($filename1 != ""){
	$ext = pathinfo($filename1, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/product/'.$rand.'_'.$filename1);
		$file_gambar = $rand.'_'.$filename1;

		mysqli_query($koneksi,"UPDATE produk set produk_foto='$file_gambar' where produk_id='$last_id'");
	}
}


header("location:produk.php");