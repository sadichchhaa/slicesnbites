<!-- localhost/slicesnbites/myadmin.php -->
<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="./styles.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto&display=swap" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/78498a2e01.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/favicon.ico">

  <title>Slices&Bites</title>
</head>

<body>

  <!-- NAVBAR START -->
  <div id="navbar-all">
    <!-- NAVBAR ONE -->
    <div id="navbar-one">
      <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0 10rem; height: 150px;">
        <a class="navbar-brand" href="#"><img src="./assets/header-logo.gif" style="height: 150px;" alt="Slices&Bites"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-middle ml-auto">
            <li class="nav-item active nav1">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav1">
              <a class="nav-link" href="#">Stores</a>
            </li>
            <li class="nav-item nav1">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item nav1">
              <a class="nav-link" href="#">Customize Your Pizza</a>
            </li>
          </ul>
          <!-- <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a> -->
          <a href="cart.php" style="margin-right: 20px; margin-left: 15px;">
          <button type="button" class="d-none d-sm-inline-block btn btn-outline-light btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn">
          <i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-light"></span></i> Cart</button></a>
          
          <div class="dropdown">
              <button type="button" class="d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-sign-in"><?php echo $_SESSION['login_user']; ?></i></button>
                  <div class="dropdown-menu text-center">
                    <a class="dropdown-item" href="userpage.php">MyAdmin</a>
                    <a class="dropdown-item" href="signout.php">SignOut</a>
                  </div>
                </div>
            </div>
        </nav>
    </div>
  <!-- Navbar end -->

  <!-- To display current user information -->
  <div class="container">
      <div class="text-center mt-5 mb-5" style="border-radius: 30px; background-color: #bf1818">
        <h1 class="display-4 mt-2 text-white">USER INFORMATION</h1>
        <h4 class=" text-white rounded pt-2 pb-3">USERNAME: <?php echo $_SESSION['login_user']; ?></h4>
        <!-- Fetching information -->
        <?php
         include 'config.php';
  		 $stmt = $conn->prepare('SELECT * FROM users WHERE username = "' . $_SESSION['login_user'] . '"');
  		 $stmt->execute();
  		 $result = $stmt->get_result();
  		 while ($row = $result->fetch_assoc()):
        ?>
        <h4 class="text-white rounded pt-2 pb-3">EMAIL: <?php echo $row['email']; ?></h4>
      </div>
      <?php endwhile; ?>

    </div>
  <!-- Footer start -->
  <footer id="footer-div" class="text-center align-items-center">
      <br>
      <button type="button" name="twitter" class="btn">
        <i class="fab fa-twitter footer-icons fa-2x"></i>
      </button>
      <button type="button" name="facebook" class="btn">
        <i class="fab fa-facebook-f footer-icons fa-2x"></i>
      </button>
      <button type="button" name="instagram" class="btn">
        <i class="fab fa-instagram footer-icons fa-2x"></i>
      </button>
      <button type="button" name="email" class="btn">
        <i class="fas fa-envelope footer-icons fa-2x"></i>
      </button>
      <br>
      <br>
      <img src="./assets/footer-logo.gif" alt="footer-logo" height="200px">
      <br>
      <br>
      <h5 style="color:white;">Slices&Bites | Veggie Imperium, Brocolli - East | Telephone - 3141590000</h5>
      <br>
      <p style="color: #737373;">Copyrights © 2020 DAPS. All rights reserved</p>
      <br>
      <button type="button" class="btn btn-light" style="background-color: #bf1818;
      border-color: #941919;
      color: white;">Find Us On Map</button>
    </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
  <!-- Footer end -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <!-- displaying product bu using function in javascript -->

</body>
</html>