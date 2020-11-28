<!-- localhost/slicesnbites/cart.php -->
<?php
  session_start();
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
  
  <title>Cart</title>
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
                    <a class="dropdown-item" href="#">MyAdmin</a>
                    <a class="dropdown-item" href="php_files/signout.php">SignOut</a>
                  </div>
                </div>
            </div>
        </nav>
    </div>

  </div>

  <div class="container">
    <div class="row justify-content-center">
      <!-- Container to show alert message -->
      <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) 
        {echo $_SESSION['showAlert'];} else { echo 'none';} unset($_SESSION['showAlert']); ?>" 
        class="alert alert-success alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><?php if (isset($_SESSION['message'])) {
          echo $_SESSION['message'];
          } unset($_SESSION['showAlert']); ?></strong>
      </div>
      <!-- End of Container to show alert message -->
      
      <!-- product-cart table -->
      <div class="table-responsive mt-2">
        <table class="table table-bordered table-striped text-center">
          <thead>
            <tr>
              <td colspan="7">
                <h3 class="text-center text-dark m-1">Your Cart!</h3>
              </td>
            </tr>
            <tr>
              <th>ID</th>
              <!-- <th>Image</th> -->
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <!-- clear cart function -->
              <th>
                <a href="action.php?clear=all" class="badge-danger badge p-1" 
                onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear ALL</a>
              </th>
            </tr>
          </thead>

          <tbody> 
            <!--Fteching product details from product table -->
            <?php
              require 'config.php';
              $stmt = $conn->prepare('SELECT * FROM cart');
              $stmt->execute();
              $result = $stmt->get_result();
              $grand_total = 0;
              // to fetch from other table
              while ($row = $result->fetch_assoc()):
            ?>
             <!-- structure of showing Prduct details -->
            <tr>
              <td><?= $row['id'] ?></td>
              <input type="hidden" class="pid" value="<?= $row['id'] ?>">
              <!-- <td><img src="images_for_database/<?= $row['image'] ?>" width="50"></td> -->
              <td><?= $row['product_name'] ?></td>
              <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?></td>
              <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>"><td>
              <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;"></td>
              <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
              <!-- to remove one item from the cart -->
              <td><a href="action.php?remove=<?= $row['id'] ?>"class="text-danger lead" 
              onclick="return confirm('Are you sure want to remove this item?');">
              <i class="fas fa-trash-alt"></i></a></td></tr>
            <!-- total cost -->
            <?php $grand_total += $row['total_price']; ?>

            <?php endwhile; ?>

            <tr>
              <td colspan="3"><a href="index2.php" class="btn btn-outline-secondary"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a></td>
              <td colspan="2"><b>Total</b></td>
              <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
              <td><a href="checkout.php" class="btn btn-secondary<?= ($grand_total > 1) ? '' : 'disabled'; ?>">
              <i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a></td>
            </tr>
          </tbody>
        </table>
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

    <!-- ajax bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />

    <!-- SCRIPT START -->
    <script type="text/javascript">
    $(document).ready(function() {
      // quantity change
      $(".itemQty").on('change', function() {
        var $el = $(this).closest('tr');
        var pid = $el.find(".pid").val();
        var pprice = $el.find(".pprice").val();
        var qty = $el.find(".itemQty").val();
        location.reload(true);
        
        $.ajax
        ({
          url: 'action.php',
          method: 'post',
          cache: false,
          data: 
          {
            qty: qty,
            pid: pid,
            pprice: pprice
          },
          success: function(response) 
          {
            console.log(response);
          }
        });
      });

    //display on navbar total no in cart
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
  <!-- END SCRIPT -->
</body>

</html>