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
    <link rel="stylesheet" href="css/login-style.css" type="text/css" />
  </head>

  <body>
    <div class="login-page">
      <div class="form">
        <span
          ><h4><b>Register Page</b></h4></span
        >
        <hr />
        <?php 
				if(isset($_GET['alert'])){
					if($_GET['alert'] == "duplikat"){
						echo "<div class='alert alert-danger text-center'>
                    Maaf email ini sudah digunakan.
                  </div>";
					}
				}
				?>
        <form class="login-form" action="register-act.php" method="POST">
          <input type="text" class="input" required="required" name="nama" placeholder="Name" />
          <input type="text" class="input" required="required" name="email" placeholder="Email" />
          <input type="password" class="input" required="required" name="password" placeholder="Password" />
          <input type="text" class="input" required="required" name="phone" placeholder="Phone" />
          <button type="submit">create account</button>
          <p class="message">
            Already registered? <a href="login.php">Sign In</a>
          </p>
        </form>
      </div>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
