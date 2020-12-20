<!-- localhost/slicesnbites/index2.php -->
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
                  <i class="fa fa-sign-in"><?php echo $_SESSION['login_user'];?></i></button>
                  <div class="dropdown-menu text-center">
                    <a class="dropdown-item" href="myadmin.php">MyAdmin</a>
                    <a class="dropdown-item" href="signout.php">SignOut</a>
                  </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- NAVBAR TWO -->
    <!-- <div class="navbar-two">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 60px;">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#"><img src="./assets/nav-pizza.png" alt="" style="width: 50px; height: 50px;">PIZZA</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="index.php?id=$GET['product_code']=pa1"><img src="./assets/nav-pasta.png" alt="" style="width: 50px; height: 50px;">PASTA</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#"><img src="./assets/nav-sides.png" alt="" style="width: 50px; height: 50px;">SIDES</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#"><img src="./assets/nav-drinks.png" alt="" style="width: 50px; height: 50px;">DRINKS</a>
            </li>
          </ul>
        </div>
      </nav>
    </div> -->
  </div>
  <!-- Navbar end -->

  <!-- Displaying Products Start -->
  <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">

    <!-- FETCHING DATA FROM DATABASE -->

      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
      ?>
      <!-- card header  -->
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2 " style="margin-top: 10px; padding: 10px" >
        <div class="card-deck">
          <div class="card  mb-2" style="height: 560px;">
            <img src="images_for_database/<?= $row['image'] ?>" class="card-img-top" height="220">
            <div class="card-body">
              <h4 class="card-title text-center text-dark"><?= $row['product_name'] ?></h4>
              <p class="card-title text-center text-dark"><?= $row['discription'] ?></p>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign">
              </i>&nbsp;&nbsp;<?= number_format($row['product_price'],2) ?>/-</h5>
            </div>
            <!-- card footer -->
            <div class="card-footer p-1">
              <!-- using form to store data to the cart page -->
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity : </b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['product_qty'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                <button class="btn btn-danger btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to Cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

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

  <!-- SCRIPT START -->
  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();
      var pqty = $form.find(".pqty").val();

      // instead of using separate php file here used ajax
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    //to display total items in a cart

    load_cart_item_number();
    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  <!-- END OF SCRIPT -->
</body>
