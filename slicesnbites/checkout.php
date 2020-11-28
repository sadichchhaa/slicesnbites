<!-- localhost/slicesnbites/checkout.php -->

<!-- PHP START -->
<?php
  require 'config.php';
  session_start();
  
  // setting total equal to zero
	$grand_total = 0;
	$allItems = '';
  $items = [];

  // here adding two string to use
	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
  $result = $stmt->get_result();
  
  // total price=total quantity
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
  $allItems = implode(', ', $items);
  
  $stmt = $conn->prepare('SELECT * FROM users WHERE username = "' . $_SESSION['login_user'] . '"');
  $stmt->execute();
  $result = $stmt->get_result();
  while ($row = $result->fetch_assoc()):
?>
<!-- PHP END -->

<!-- HTML SYNTAX-->
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

  <title>Checkout-Page</title>
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
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="myadmin.php">MyAdmin</a>
                    <a class="dropdown-item" href="signout.php">SignOut</a>
                  </div>
                </div>
            </div>
        </nav>
    </div>
  </div>
  
  <!-- NAVBAR END -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4 mt-3" id="order">
        <h4 class="text-center text-danger p-2">you are just one step away from happiness!</h4>
        <div class="jumbotron p-3 mb-2 text-center text-white bg-danger">
          <h6 class="lead"><b>Product(s) : </b><?= $allItems; ?></h6>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount: </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
          </div>
          <!-- email -->
          <div class="form-group">
            <input type="hidden" name="email" class="form-control" value="<?=$row['email'];?>" >
          </div>
          <?php endwhile; ?>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Phone-No" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Delivery Address..."></textarea>
          </div>
          <h6 class="text-center lead">Payment Mode:</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>Payment Mode</option>
              <option value="cod">Cash On Delivery</option>
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block p-3">
          </div>
        </form>
      </div>
    </div>
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
    <!-- Footer end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <!--SCRIPT START -->
  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    //display cart item count on navbar
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
  <!-- script end -->
</body>

</html>