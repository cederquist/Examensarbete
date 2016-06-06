<?php
require_once("functions.php");
$SCI = getShoppingCartInfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Goggles</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/shop.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <?php require_once('nav.php'); ?>

  <div class="jumbotron">
    <div class="container">
      <h2>Crossglasögon från Von Zipper och Fox</h2>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container">

      <!-- Title -->
      <div class="row">
        <div class="col-lg-12">
          <h4 class="page-title">Von zipper</h4>
        </div>
      </div>

      <!-- /.row -->

      <hr>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-md-3 col-sm-6" data-img="img/1.jpg" data-product-id="1" data-price="799" data-name="Von Zipper - Bushwick">
          <div class="thumbnail">
            <img src="img/1.jpg" alt="">
            <div class="caption">
              <p class="product-description">Von Zipper "Bushwick"</p>
              <h4 class="product-price">799:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/2.jpg" data-product-id="2" data-price="699" data-name="Von Zipper - Beefy">
          <div class="thumbnail">
            <img src="img/2.jpg" alt="">
            <div class="caption">
              <p class="product-description">Von Zipper "Beefy"</p>
              <h4 class="product-price">699:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/3.jpg" data-product-id="3" data-price="949" data-name="Von Zipper - Porkchop">
          <div class="thumbnail">
            <img src="img/3.jpg" alt="">
            <div class="caption">
              <p class="product-description">Von Zipper "Porkchop"</p>
              <h4 class="product-price">949:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/4.jpg" data-product-id="4" data-price="849" data-name="Von Zipper - Gold">
          <div class="thumbnail">
            <img src="img/4.jpg" alt="">
            <div class="caption">
              <p class="product-description">Von Zipper "Gold"</p>
              <h4 class="product-price">849:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <!-- Title -->
      <div class="row">
        <div class="col-lg-12">
          <h4 class="page-title">Fox</h4>
        </div>
      </div>

      <!-- /.row -->

      <hr>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-md-3 col-sm-6" data-img="img/5.jpg" data-product-id="5" data-price="799" data-name="Fox - Air Space Division">
          <div class="thumbnail">
            <img src="img/5.jpg" alt="">
            <div class="caption">
              <p class="product-description">Fox "Air Space Division"</p>
              <h4 class="product-price">799:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/6.jpg" data-product-id="6" data-price="1099" data-name="Fox - Air Defence Libra">
          <div class="thumbnail">
            <img src="img/6.jpg" alt="">
            <div class="caption">
              <p class="product-description">Fox "Air Defence Libra"</p>
              <h4 class="product-price">1 099:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/7.jpg" data-product-id="7" data-price="1099" data-name="Fox - Air Defence Libra">
          <div class="thumbnail">
            <img src="img/7.jpg" alt="">
            <div class="caption">
              <p class="product-description">Fox "Air Defence Libra"</p>
              <h4 class="product-price">1 099:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6" data-img="img/8.jpg" data-product-id="8" data-price="849" data-name="Fox - Airspace Mars">
          <div class="thumbnail">
            <img src="img/8.jpg" alt="">
            <div class="caption">
              <p class="product-description">Fox "Airspace Mars"</p>
              <h4 class="product-price">849:-</h4>
              <p><button href="#" class="addToCartBtn standard-button">Lägg till i kundvagn</span></button></p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <!-- Footer -->
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; 2015 Gogglish Inc.</p>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/shopping-cart.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>

    <script type="text/javascript">
    $('.selectpicker').selectpicker();
    </script>


  </body>

  </html>
