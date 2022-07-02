<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$brand = $_POST['brand'];
$nama  = $_POST['nama'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];

$rand = rand();
$allowed =  array('png','jpg','jpeg');

$filename1 = $_FILES['foto']['name'];

mysqli_query($koneksi, "UPDATE produk set 
                produk_brand='$brand', 
                produk_nama='$nama', 
                produk_harga='$harga', 
				produk_berat='$berat',
                produk_deskripsi='$deskripsi' WHERE produk_id='$id'");


$last_id = mysqli_insert_id($koneksi);


if($filename1 != ""){
	$ext = pathinfo($filename1, PATHINFO_EXTENSION);

	if(in_array($ext,$allowed) ) {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/product/'.$rand.'_'.$filename1);
		$file_gambar = $rand.'_'.$filename1;

		// hapus foto lama
		$lama = mysqli_query($koneksi, "SELECT * from produk where produk_id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$foto = $l['produk_foto'];
		unlink("../img/product/$foto");

		mysqli_query($koneksi,"UPDATE produk set produk_foto='$file_gambar' where produk_id='$id'");
	}
}


header("location:produk.php");