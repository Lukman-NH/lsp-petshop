<?php 
    include 'template/header.php'; 
?>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Brand</div>
                            <?php 
                                $brand = mysqli_query($koneksi,"SELECT * FROM brand");
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    echo mysqli_num_rows($brand);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Produk</div>
                            <?php 
                                $produk = mysqli_query($koneksi,"SELECT * FROM produk");
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    echo mysqli_num_rows($produk);
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Transaksi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pelanggan</div>
                            <?php 
                                $pelanggan = mysqli_query($koneksi,"SELECT * FROM pelanggan");
                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                    echo mysqli_num_rows($pelanggan);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
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