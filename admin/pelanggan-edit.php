<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->     
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Pelanggan</h4>
    </div>
        <div class="card-body">
            <?php 
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"SELECT * from pelanggan where pelanggan_id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
            <form method="post" action="pelanggan-update.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Pelanngan</label>
                    <input type="hidden" name="id" value="<?php echo $d['pelanggan_id']; ?>">
                    <input type="text" class="form-control" name="nama" required="required" 
                    placeholder="Masukkan Nama .." value="<?php echo $d['pelanggan_nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required="required" 
                    placeholder="Masukkan Email .." value="<?php echo $d['pelanggan_email']; ?>">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" required="required" 
                    placeholder="Masukkan Phone .."value="<?php echo $d['pelanggan_phone']; ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru..">
                  <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
                </div>
                <hr>
                <button type="submit" class="btn btn-success btn-icon-split" name="submit">
                    <span class="text">Edit</span>
                </button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>