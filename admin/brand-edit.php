<?php 
    include 'template/header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Form Edit Brand</h4>
    </div>
        <div class="card-body">
            <form method="post" action="brand-update.php" enctype="multipart/form-data">
                <?php 
                    $id = $_GET['id'];              
                    $data = mysqli_query($koneksi, "SELECT * from brand where brand_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                <div class="form-group">
                    <label>Nama Brand</label>
                     <input type="hidden" name="id" value="<?php echo $d['brand_id'] ?>">
                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama ..">
                </div>
                <hr>
                <button type="submit" class="btn btn-success btn-icon-split" name="submit">
                    <span class="text">Edit</span>
                </button>
                  <?php 
                }
                ?>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?php 
    include 'template/footer.php';
?>