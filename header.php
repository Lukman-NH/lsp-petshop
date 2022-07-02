<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PetsQu</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <?php
    include 'koneksi.php';
    session_start();

    $file = basename($_SERVER['PHP_SELF']);
    if(!isset($_SESSION['pelanggan_status'])){
      
      $protect = array('pelanggan-logout.php');

      if(in_array($file, $protect)){
        header("location:index.php");
      }

      if($file == "checkout.php"){
        header("location:login.php?alert=login-dulu");
      }
    
    }else {
      $auth = array('login.php','register.php');

      if(in_array($file, $auth)){
        header("location:index.php");
	}

  } 
  
    // if($file == "checkout.php"){

    //   if(!isset($_SESSION['keranjang']) || count($_SESSION['keranjang']) == 0){

    //     header("location:shoping-cart.php?alert=keranjang_kosong");

    //   }
    // }
  
  ?>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="index.php"><img src="img/petsqu.png" alt="" /></a>
      </div>
      <?php 
          if(isset($_SESSION['pelanggan_status'])){
          $id_pelanggan = $_SESSION['pelanggan_id'];
          $pelanggan = mysqli_query($koneksi,"SELECT * from pelanggan WHERE pelanggan_id ='$id_pelanggan'");
          $p = mysqli_fetch_assoc($pelanggan);
          ?>
          <div class="humberger__menu__widget">
              <div class="header__top__right__auth">
                <a href="pelanggan-logout.php"><i class="fa fa-user"></i> Logout</a>
              </div>
            </div>
              <?php
          }else{
              ?>
              <div class="humberger__menu__widget">
              <div class="header__top__right__auth">
                <a href="pelanggan-logout.php"><i class="fa fa-user"></i> Login</a>
              </div>
            </div>
            <?php
          }   
      ?>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="active"><a href="./index.php">Home</a></li>
          <li><a href="./produk.php">Produk</a></li>
          <li>
            <a href="#">Pages</a>
            <ul class="header__menu__dropdown">
              <li><a href="./shoping-cart.php">Shoping Cart</a></li>
              <li><a href="./checkout.php">Check Out</a></li>
            </ul>
          </li>
          <li><a href="./contact.php">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <?php 
                if(isset($_SESSION['pelanggan_status'])){
                $id_pelanggan = $_SESSION['pelanggan_id'];
                $pelanggan = mysqli_query($koneksi,"SELECT * from pelanggan WHERE pelanggan_id ='$id_pelanggan'");
                $p = mysqli_fetch_assoc($pelanggan);
                ?>
                    <div class="header__top__right">
                        <div class="header__top__right__login">
                          <i class="fa fa-user">
                            <?php echo $p['pelanggan_nama']; ?>
                          </i>  
                        </div>
                        <div class="header__top__right__auth">
                            <a href="pelanggan-logout.php">Logout <i class="fa fa-sign-out"></i></a>
                        </div>
                    </div>

                    <?php
                }else{
                    ?>
                    <div class="header__top__right">
                        <div class="header__top__right__login">
                            <a href="register.php"
                            ><i class="fa fa-sign-in"> Daftar</i></a
                            >
                        </div>
                        <div class="header__top__right__auth">
                            <a href="login.php"><i class="fa fa-user"> Login</i></a>
                        </div>
                    </div>
                  <?php
                }   
            ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="header__logo">
              <a href="./index.php"><img src="img/petsqu.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./produk.php">Produk</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                  </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-2">
            <div class="header__cart">
              <ul>
                <li>
                  <a href="shoping-cart.php"
                    ><i class="fa fa-shopping-bag"></i> <span>0</span></a
                  >
                </li>
              </ul>
              <div class="header__cart__price">item: <span>Rp.0</span></div>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header Section End -->