<?php 
    include 'template/header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="text-center" width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi,"SELECT * from pelanggan");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th><?php echo $d['pelanggan_id']; ?></th>
                            <th><?php echo $d['pelanggan_nama']; ?></th>
                            <th><?php echo $d['pelanggan_email']; ?></th>
                            <th><?php echo $d['pelanggan_phone']; ?></th>
                            <th>
                                <div class="dropdown mb-4">
                                <button class="btn btn-info dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <div class="dropdown-menu animated--fade-in"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="pelanggan-edit.php?id=<?php echo $d['pelanggan_id'] ?>">Edit</a>
                                    <a class="dropdown-item" href="pelanggan-hapus.php?id=<?php echo $d['pelanggan_id'] ?>">Hapus</a>
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