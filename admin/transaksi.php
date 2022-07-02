<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Transaksi Tables</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10%">ID</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Update Status</th>
                            <th class="text-center" width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>TRX-001</th>
                            <th>02-08-22</th>
                            <th>Lukman</th>
                            <th>150.000</th>
                            <th class="text-center">
                                <span class="text-danger">Pending</span>
                            </th>
                            <th>
                                <form action="" method="post">
                                <input type="hidden" value="" name="invoice">
                                <select name="status" id="" class="form-control" onchange="form.submit()">
                                    <option value="0">Pending</option>
                                    <option value="1">Diproses</option>
                                    <option value="2">Dikirim</option>
                                    <option value="3">Selesai</option>
                                </select>
                                </form>
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
                                    <a class="dropdown-item" href="transaksi-cetak.php">Cetak</a>
                                    <a class="dropdown-item" href="transaksi-hapus.php">Hapus</a>
                                </div>
                                </div>
                            </th>
                        </tr>
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