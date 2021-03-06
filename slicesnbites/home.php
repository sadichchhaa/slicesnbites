<!-- localhost/slicesnbites/home.php -->
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

  <!-- NAVBAR ONE -->
  <div id="navbar-all">
    <div id="navbar-one">
      <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 0 10rem; height: 120px;">
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
              <a class="nav-link" href="./404node.html">Customize Your Pizza</a>
            </li>
          </ul>
          <a href="cart.php" style="margin-right: 20px; margin-left: 15px;"><button type="button" class="d-none d-sm-inline-block btn btn-outline-light btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn"><i class="fa fa-shopping-cart"></i>
              Cart</button>
          </a>
          <div class="dropdown">
            <button type="button" class="d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-sign-in"><?php echo $_SESSION['login_user'];?></i></button>
              <div class="dropdown-menu text-center">
                <a class="dropdown-item" href="myadmin.php">MyAdmin</a>
                <a class="dropdown-item" href="signout.php">SignOut</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!-- NAVBAR TWO -->
    <div class="navbar-two">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 60px;">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mr-auto">
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#pizza-menu"><img src="./assets/nav-pizza.png" alt="" style="width: 50px; height: 50px;">PIZZA</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#pasta-menu"><img src="./assets/nav-pasta.png" alt="" style="width: 50px; height: 50px;">PASTA</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#sides-menu"><img src="./assets/nav-sides.png" alt="" style="width: 50px; height: 50px;">SIDES</a>
            </li>
            <li class="nav-item nav-categories">
              <a class="nav-link" href="#drinks-menu"><img src="./assets/nav-drinks.png" alt="" style="width: 50px; height: 50px;">DRINKS</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <div>
    <!-- sliding carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://m2.alothemes.com/pizzaro/pub/media/magiccart/magicslider/s/l/slide1-demo3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/carousel-2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/carousel-3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- features -->
    <section id="features">
      <div class="row">
        <div class="col-lg-3 feature-box">
          <i class="fas fa-4x features-icons"><img src="./assets/best-quality.png" style="height: 150px; width: 150px;" alt=""></i>
          <h3 class="feature-title">BEST QUALITY</h3>
          <p class="feature-description">Fresh ingredients, assorted spices!</p>
        </div>
        <div class="col-lg-3 feature-box">
          <i class="fas fa-4x features-icons"><img src="./assets/on-time.png" style="height: 150px; width: 150px;" alt=""></i>
          <h3 class="feature-title">ON TIME</h3>
          <p class="feature-description">Nothing ordinary stops us from delivering your slices&bites!</p>
        </div>
        <div class="col-lg-3 feature-box">
          <i class="fas fa-4x features-icons"><img src="./assets/tasty-food.png" style="height: 150px; width: 150px;" alt=""></i>
          <h3 class="feature-title">TASTY FOOD</h3>
          <p class="feature-description">We solemnly swear we are up for good food for any mood!</p>
        </div>
        <div class="col-lg-3 feature-box">
          <i class="fas fa-4x features-icons"><img src="./assets/masterchefs.png" style="height: 150px; width: 150px;" alt=""></i>
          <h3 class="feature-title">MASTERCHEFS</h3>
          <p class="feature-description">Buttery biscuit base for days and days!</< /p>
        </div>

      </div>
    </section>

    <p class="partition"></p>

    <h3 class="home-headers">- PICK YOUR TASTE -</h3>
    <h1 class="explore-our-menu" style="color: #bf1818;"><span>- </span>EXPLORE OUR MENU<span> -</span></h1>

    <!-- MENU -->

    <section id="menu">

      <!--PIZZA MENU-->

      <section id="pizza-menu" class="menu-box">

        <div id="pizza-menu-div" class="carousel slide carousel-multi-item" data-ride="carousel">
          <div style="float:left">
            <img src="./assets/nav-pizza.png" alt="" style="width: 40px; height: 40px; margin-right: 8px;">
          </div>
          <div style="float:left">
            <h3>Pizza</h3>
          </div>
          <!--Controls-->
          <div class="controls-top" style="float:right">
            <a class="btn-floating lr-icons" href="#pizza-menu-div" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
            <a class="btn-floating lr-icons" href="#pizza-menu-div" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#pizza-menu-div" data-slide-to="0" class="active"></li>
            <li data-target="#pizza-menu-div" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox" style="height: 500px;">
            <!--First slide-->
            <div class="carousel-item active">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_margherita_2502.jpg" alt="pizza-margherita-img">
                  <div class="card-body">
                    <h4 class="card-title">Margherita</h4>
                    <p class="card-text">A classic delight with 100% Real mozzarella cheese.</p>
                    <p class="pricing">₹ 99</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/farmhouse.png" alt="pizza-farmhouse-img">
                  <div class="card-body">
                    <h4 class="card-title">Farmhouse</h4>
                    <p class="card-text">Delightful combination of onion, capsicum, tomato & grilled mushroom</p>
                    <p class="pricing">₹ 129</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    <br><br>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_veggie_paradise.jpg" alt="pizza-veg-paradise-img">
                  <div class="card-body">
                    <h4 class="card-title">Veggie Paradise</h4>
                    <p class="card-text">The awesome foursome! Golden corn, black olives, capsicum, red paprika.</p>
                    <p class="pricing">₹ 159</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_peppy_paneer.jpg" alt="pizza-peppy-paneer-img">
                  <div class="card-body">
                    <h4 class="card-title">Peppy Paneer</h4>
                    <p class="card-text">Flavorful trio of juicy paneer, crisp capsicum with spicy red paprika</p>
                    <p class="pricing">₹ 159</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_veg_extravaganza.jpg" alt="pizza-veg-extravaganza">
                  <div class="card-body">
                    <h4 class="card-title">Veggie Extravaganza</h4>
                    <p class="card-text">Black olives, capsicum, onion, grilled mushroom, corn, tomato, jalapeno & extra
                      cheese.</p>
                    <p class="pricing">₹ 179</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_chicken_dominator.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Chicken Denominator</h4>
                    <p class="card-text">Loaded with double pepper barbecue chicken, peri-peri chicken, chicken tikka &
                      grilled chicken rashers.</p>
                    <p class="pricing">₹ 199</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_non_veg_supreme.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Non Veg Supreme</h4>
                    <p class="card-text">Supreme combination of black olives, onion, capsicum, grilled mushroom, pepper
                      barbecue chicken, peri-peri chicken & grilled chicken rashers.</p>
                    <p class="pricing">₹ 229</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/new_chicken_fiesta.jpg" alt="pizza-chicken-fiesta-img">
                  <div class="card-body">
                    <h4 class="card-title">Chicken Fiesta</h4>
                    <p class="card-text">Grilled chicken rashers, peri-peri chicken, onion & capsicum, a complete fiesta
                    </p>
                    <p class="pricing">₹ 249</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.Second slide-->
          </div>
          <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->

      </section>

      <p class="partition" style="margin: 20px auto;"></p>


      <!--PASTA MENU-->

      <section id="pasta-menu" class="menu-box">

        <div id="pasta-menu-div" class="carousel slide carousel-multi-item" data-ride="carousel">
          <div style="float:left">
            <img src="./assets/nav-pasta.png" alt="" style="width: 40px; height: 40px; margin-right: 8px;">
          </div>
          <div style="float:left">
            <h3>Pasta</h3>
          </div>
          <!--Controls-->
          <div class="controls-top" style="float:right">
            <a class="btn-floating lr-icons" href="#pasta-menu-div" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
            <a class="btn-floating lr-icons" href="#pasta-menu-div" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#pasta-menu-div" data-slide-to="0" class="active"></li>
            <li data-target="#pasta-menu-div" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox" style="height: 500px;">
            <!--First slide-->
            <div class="carousel-item active">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/CreamyTomatoVeg_N.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Creamy Tomato Pasta</h4>
                    <p class="card-text">Instant Fusilli Pasta, Creamy Culinary Dressing, Onion, Olive, Green Capsicum,
                      Parsley sprinkle.</p>
                    <p class="pricing">₹ 129</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/JalapenoVeg_N.jpg" alt="pasta-cheesy-jalapeno">
                  <div class="card-body">
                    <h4 class="card-title">Cheesy Jalapeno Pasta Veg</h4>
                    <p class="card-text">Instant Fusilli Pasta, Cheesy Jalapeno Sauce, Onion, Jalapeno, Parsley sprinkle
                    </p>
                    <p class="pricing">₹ 129</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/PaneerTikkaMasala_N.jpg" alt="pasta-tikka-masala">
                  <div class="card-body">
                    <h4 class="card-title">Tikka Masala Pasta Veg</h4>
                    <p class="card-text">Instant Fusilli Pasta, Spicy Red dressing, Onion, Paneer Tikka, Parsley
                      sprinkle.
                    <p>
                    <p class="pricing">₹ 129</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/CreamyTomatoNV_N.jpg" alt="pasta-creamy-tomato">
                  <div class="card-body">
                    <h4 class="card-title">Creamy Tomato Pasta Non Veg</h4>
                    <p class="card-text">Instant Fusilli Pasta, Creamy Culinary Dressing, Onion, Olives, BBQ Pepper
                      Chicken, Parsley sprinkle.</p>
                    <p class="pricing">₹ 139</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/jalapenoPastaNV_N.jpg" alt="pasta-nv-jalapeno">
                  <div class="card-body">
                    <h4 class="card-title">Cheesy Jalapeno Pasta Non Veg</h4>
                    <p class="card-text">Instant Fusilli Pasta, Cheesy Jalapeno Sauce, Onion, Jalapeno, BBQ Pepper
                      Chicken, Parsley sprinkle.</p>
                    <p class="pricing">₹ 159</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/ChickenTikkaMasala_N.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Tikka Masala Pasta Non Veg</h4>
                    <p class="card-text">Loaded with double pepper barbecue chicken, peri-peri chicken, chicken tikka &
                      grilled chicken rashers.</p>
                    <p class="pricing">₹ 199</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/PASTATREATSPECIALS.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Pasta Treat Specials</h4>
                    <p class="card-text">Veg Creamy Tomato Pasta + Veg Tikka Masala Pasta + Garlic Bread + Pepsi.</p>
                    <p class="pricing">₹ 359</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/PASTAPIZZAPARTYSPECIALS.jpg" alt="pizza-pasta-party-img">
                  <div class="card-body">
                    <h4 class="card-title">Pasta Pizza Party Specials</h4>
                    <p class="card-text">Med Creamy Tomato Pasta Pizza + Tikka Masala Pasta + Pepsi</p>
                    <p class="pricing">₹ 299</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.Second slide-->
          </div>
          <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->

      </section>

      <p class="partition" style="margin: 20px auto;"></p>

      <!--SIDES MENU-->

      <section id="sides-menu" class="menu-box">

        <div id="sides-menu-div" class="carousel slide carousel-multi-item" data-ride="carousel">
          <div style="float:left">
            <img src="./assets/nav-sides.png" alt="" style="width: 40px; height: 40px; margin-right: 8px;">
          </div>
          <div style="float:left">
            <h3>Sides</h3>
          </div>
          <!--Controls-->
          <div class="controls-top" style="float:right">
            <a class="btn-floating lr-icons" href="#sides-menu-div" data-slide="prev"><i class="fa fa-arrow-circle-left"></i></a>
            <a class="btn-floating lr-icons" href="#sides-menu-div" data-slide="next"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#sides-menu-div" data-slide-to="0" class="active"></li>
            <li data-target="#sides-menu-div" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox" style="height: 500px;">
            <!--First slide-->
            <div class="carousel-item active">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="./assets/sides-french-fries.jpg" height=114.94px width=296.3px>
                  <div class="card-body">
                    <h4 class="card-title">French Fries (Reg)</h4>
                    <p class="card-text">Indulge in a taste of choiciest potatoes and perfect crisp.</p>
                    <p class="pricing">₹ 59</p>
                    <a href="index2.php"></a>
                    <button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button>
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/potato_cheese_shots.png" alt="sides-cheese-shots-img">
                  <div class="card-body">
                    <h4 class="card-title">Potato Cheese Shots</h4>
                    <p class="card-text">Crisp and golden outside, flavorful burst of cheese, potato & spice inside</p>
                    <p class="pricing">₹ 69</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/Crinkle_Fries.png" alt="sides-crinkle-fries">
                  <div class="card-body">
                    <h4 class="card-title">Crinkle Fries</h4>
                    <p class="card-text">Crispy wavy masala coated fries served with a spicy tomato chilli sauce.
                    <p>
                    <p class="pricing">₹ 69</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/taco.png" alt="sides-taco-mexicana">
                  <div class="card-body">
                    <h4 class="card-title">Taco Mexicana-Veg</h4>
                    <p class="card-text">Truly irresistible! Crispy taco with a delicious veg patty & creamy sauce.</p>
                    <p class="pricing">₹ 79</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.First slide-->
            <!--Second slide-->
            <div class="carousel-item">
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/Parcel_Veg.jpg" alt="sides-veg-parcel">
                  <div class="card-body">
                    <h4 class="card-title">Veg Parcel</h4>
                    <p class="card-text">Snacky bites! Pizza rolls with paneer & creamy harissa sauce.</p>
                    <p class="pricing">₹ 49</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/Parcel_Nonveg.jpg">
                  <div class="card-body">
                    <h4 class="card-title">Chicken Parcel</h4>
                    <p class="card-text">Snacky bites! Pizza rolls with chicken sausage & creamy harissa sauce.</p>
                    <p class="pricing">₹ 69</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/Butterscotch.png">
                  <div class="card-body">
                    <h4 class="card-title">Butterscotch Mousse Cake</h4>
                    <p class="card-text">Sweet temptation! Butterscotch flavored mousse.</p>
                    <p class="pricing">₹ 99</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                  <img class="card-img-top" src="https://images.dominos.co.in/Brownie_Fantasy.png" alt="sides-brownie-fantasy">
                  <div class="card-body">
                    <h4 class="card-title">Brownie Fantasy</h4>
                    <p class="card-text">Sweet Temptation! Hot Chocolate Brownie drizzled with chocolate fudge sauce</p>
                    <p class="pricing">₹ 99</p>
                    <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                      Cart</button></a>
                    
                  </div>
                </div>
              </div>
            </div>
            <!--/.Second slide-->
          </div>
          <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->

      </section>

      <p class="partition" style="margin: 20px auto;"></p>

      <section id="drinks-menu" class="menu-box">
        <div id="drinks-menu-div">
          <div style="float:left">
            <img src="./assets/nav-drinks.png" alt="" style="width: 40px; height: 40px; margin-right: 8px;">
          </div>
          <div style="float:left">
            <h3>Drinks</h3>
          </div>
          <br><br>
          <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="https://i.ndtvimg.com/i/2016-05/iced-tea-625_625x350_41462162243.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Iced Tea</h4>
                <p class="card-text">Just chill! Cold tea with addition of sweetness on requirement</p>
                <p class="pricing">₹ 59</p>
                <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                  Cart</button></a>
                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://img.delicious.com.au/4dL8KYKn/w1200/del/2018/01/rainbow-smoothies-70741-2.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Rainbow Smoothie</h4>
                <p class="card-text">A 7 layered smoothie! Not only fun to look at, but also delicious to drink</p>
                <p class="pricing">₹ 119</p>
                <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                  Cart</button></a>
                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://hip2save.com/wp-content/uploads/2014/07/blueberry-kiwi-mojito-recipe.jpg?fit=1200%2C630&strip=all" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Blueberry Kiwi Mojito</h4>
                <p class="card-text">Summer special! Fizzy and bubbly cocktail</p>
                <p class="pricing">₹ 89</p>
                <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                  Cart</button></a>
                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="https://res.cloudinary.com/hsxfx8igq/image/upload/t_16x9_recipe_image,f_auto/v1601500271/vkkaghljdtrftxdlzhxa.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Milkshake Tour</h4>
                <p class="card-text">Combo of melted vanilla, chocolate, strawberry and mint</p>
                <p class="pricing">₹ 199</p>
                <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
                  Cart</button></a>
                
              </div>
            </div>
          </div>
        </div>
      </section>

      <p class="partition" style="margin: 20px auto;"></p>


    </section>

    <section id="student-banner">
      <a href="./404node.html">
        <img src="./assets/stu-happy-hours-banner.jpg" alt="stu-heppy-hours" height="90%" width="90%" href="./404node.html">
      </a>
    </section>

    <section id="our-latest">
      <p class="partition"></p>
      <h3 class="home-headers">
        - OUR LATEST <img src="./assets/plain-logo.png" alt="Slices&Bites" height="150px"> -
      </h3>
    </section>

    <!--LATEST MENU-->

    <div class="card-deck" style="margin: 0 5%;">
      <div class="card">
        <img class="card-img-top" src="https://images.dominos.co.in/Stuffed_garlic_Bread.png" alt="latest-garlic-bread-img">
        <div class="card-body text-center">
          <h4 class="card-title">Classic Stuffed Garlic Bread</h4>
          <p class="card-text">Freshly baked garlic bread with cheese, juicy corn & tangy jalapeno.</p>
          <p class="pricing">₹ 149</p>
          <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
            Cart</button></a>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://images.dominos.co.in/Burger_PizzaNonVeg_nvg.png" alt="burger-pizza-img">
        <div class="card-body text-center">
          <h4 class="card-title">Burger Pizza - Non Veg</h4>
          <p class="card-text">Oven-baked buns with cheese, peri-peri chicken, tomato & capsicum in creamy mayo.</p>
          <p class="pricing">₹ 149</p>
          <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
            Cart</button></a>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://images.dominos.co.in/IndianTandooriChickenTikka.jpg" alt="indi-chicken-tikka-img">
        <div class="card-body text-center">
          <h4 class="card-title">Indi Chicken Tikka</h4>
          <p class="card-text">The wholesome flavour of tandoori masala with Chicken tikka, onion, red paprika & mint
            mayo.</p>
          <p class="pricing">₹ 399</p>
          <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
            Cart</button></a>
          
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="https://images.dominos.co.in/CreamyTomatoPPNV_N.jpg" alt="pasta-pizza-img">
        <div class="card-body text-center">
          <h4 class="card-title">Creamy Tomato Pasta Pizza - Non Veg</h4>
          <p class="card-text">Loaded with a delicious creamy tomato pasta topping, BBQ pepper chicken, green capsicum,
            crunchy red and yellow bell peppers.</p>
          <p class="pricing">₹ 359</p>
          <a href="index2.php"><button type="button" class="add-to-cart d-none d-sm-inline-block btn btn-dark btn-lg ml-lg-60 mr-40 mr-lg-0 order-2 order-lg-3 cs-btn" style="color: white; background-color: #bf1818;"><i class="fa fa-shopping-cart"></i>
            Cart</button></a>
          
        </div>
      </div>
      
    </div>

    <p class="partition" style="margin: 20px auto;"></p>

    <footer id="footer-div" class="text-center align-items-center">
      <br>
      <a href="./404node.html">
        <button type="button" name="twitter" class="btn">
          <i class="fab fa-twitter footer-icons fa-2x"></i>
        </button>
      </a>
      <a href="./404node.html">
        <button type="button" name="facebook" class="btn">
          <i class="fab fa-facebook-f footer-icons fa-2x"></i>
        </button>
      </a>
      <a href="./404node.html">
        <button type="button" name="instagram" class="btn">
          <i class="fab fa-instagram footer-icons fa-2x"></i>
        </button>
      </a>
      <a href="./404node.html">
        <button type="button" name="email" class="btn">
          <i class="fas fa-envelope footer-icons fa-2x"></i>
        </button>
      </a>
      <br>
      <br>
      <img src="./assets/footer-logo.gif" alt="footer-logo" height="200px">
      <br>
      <br>
      <h5 style="color:white;">Slices&Bites | Veggie Imperium, Brocolli - East | Telephone - 3141590000</h5>
      <br>
      <p style="color: #737373;">Copyrights © 2020 DAPS. All rights reserved</p>
      <br>
      <a href="./404node.html">
        <button type="button" class="btn btn-light" style="background-color: #bf1818;
        border-color: #941919;
        color: white;"><i class="fa fa-map-marker" aria-hidden="true"></i> Find Us On Map</button>
      </a>
      <a href="./404node.html">
        <button type="button" class="btn btn-light" style="background-color: #bf1818;
        border-color: #941919;
        color: white;"><i class="fa fa-user" aria-hidden="true"></i> Contact Us</button>
      </a>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
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
        function load_cart_item_number() 
        {
          $.ajax(
          {
            url: 'action.php',
            method: 'get',
            data: 
          {
            cartItem: "cart_item"
          },
          success: function(response)
          {
            $("#cart-item").html(response);
          }
          });
           }
            });
            </script>
              <!-- END OF SCRIPT -->
    </body>

</html>