<?php 
    include 'template/header.php';
?>

    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Produk Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="produk-tambah.php" class="btn btn-primary btn-icon-split">
                <span class="icon">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text">Tambah Produk</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Nama</th>
                            <th>Brand</th>
                            <th>Harga</th>
                            <th class="text-center">Foto</th>
                            <th class="text-center" width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * FROM produk,brand 
                                                       where brand_id=produk_brand order by produk_id desc");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                        <tr>
                            <th><?php echo $d['produk_id']; ?></th>
                            <th><?php echo $d['produk_nama']; ?></th>
                            <th><?php echo $d['brand_nama']; ?></th>
                            <th><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?></th>
                            <th>
                                <center>
                                 <?php if($d['produk_foto'] == ""){ ?>
                                    Tidak ada gambar
                                <?php }else{ ?>
                                    <img src="../img/product/<?php echo $d['produk_foto'] ?>" style="width: 80px;height: auto">
                                <?php } ?>
                                </center>
                            </th>
                            <th>
                                <div class="dropdown mb-4">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated--fade-in"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="produk-edit.php?id=<?php echo $d['produk_id']?>">Edit</a>
                                    <a class="dropdown-item" href="produk-hapus.php?id=<?php echo $d['produk_id']?>">Hapus</a>
                                </div>
                                </div>       
                            </th>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
    include 'template/footer.php';
?>
