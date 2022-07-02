<?php
    include 'header.php';
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>PetsQu Shop</h2>
              <div class="breadcrumb__option">
                <a href="./index.php">Home</a>
                <span>Produk</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-5">
            <div class="sidebar">
              <div class="sidebar__item">
                <h4>Brands</h4>

                <ul>
                  <li><a href="produk.php">All</a></li> 
                  <?php 
                    $data = mysqli_query($koneksi,"SELECT * FROM brand");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <li><a href="produk-brand.php?id=<?php echo $d['brand_id']; ?>">
                            <?php echo $d['brand_nama']; ?></a></li>
                        <?php 
                    }
                    ?>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-lg-9 col-md-7">
            <div class="row">
            <?php
            include ('koneksi.php');
            $brand = mysqli_real_escape_string($koneksi, $_GET['id']);

            $result = mysqli_query($koneksi, "SELECT * from produk,brand 
                                    WHERE brand_id='$brand' and brand_id=produk_brand");
            $data = mysqli_query($koneksi,"SELECT * from produk,brand 
                                    WHERE brand_id='$brand' and brand_id=produk_brand order by produk_id");
            while($d = mysqli_fetch_array($data)){
            ?>

              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                   <div class="product__item__pic set-bg"
                        data-setbg="img/product/<?php echo $d['produk_foto'] ?>"
                   >
                        
                    <ul class="product__item__pic__hover">
                        <li>
                          <a href="produk-details.php?id=<?php echo $d['produk_id'] ?>"><i class="fa fa-info"></i></a>
                        </li>
                        <li>
                        <a href="shoping-cart.php"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                    </ul>
                    </div>
                    <div class="product__item__text">
                    <h6><?php echo $d['brand_nama']; ?> - <a href="produk-details.php?id=<?php echo $d['produk_id'] ?>"><?php echo $d['produk_nama']; ?></a></h6>
                    <h5><?php echo "Rp. ".number_format($d['produk_harga']).",-"; ?></h5>
                    </div>
                </div>
                </div>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->

<?php
    include 'footer.php';
?>