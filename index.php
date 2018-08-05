<?php
include "includes/koneksi.php";
session_start();
if (!isset($_SESSION['username'])) {
  echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MomeCake</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/modern-business.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info fixed-top">
       <img src="assets/img/mome(1).jpg" class="rounded-circle" width="40" height="40"> </img>
        <a class="navbar-brand" href="index.php"> MomeCake</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link" href="menu.php">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <li class="nav-item">
               <form action="search.php" method="post" class="form-inline mt-2 mt-md-1 ml-2">
                <input class="form-control form-control-sm mr-sm-2" placeholder="Search Product" aria-label="Search Product" type="text" name="cari">
                <button class="btn btn-sm btn-outline-light my-2 my-sm-0" type="submit">Search</button>
              </form>
            </li>
          </ul>
        </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('assets/img/crsl.jpg')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/img/carau.jpg')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/img/header.jpg')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="leftside">
      <ul>
        <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></li></a>
        <li><a href="http://www.twitter.com/momecake1"><i class="fa fa-twitter"></i></li></a>
        <li><i class="fa fa-google-plus"></i></li>
        <li><a href="http://www.instagram.com/momecake"><i class="fa fa-instagram"></i></li></a>
      </ul> 
    </div>

<br>
    <!-- Page Content -->
    <div class="container">
      <center>
      <h1 class="my-4">Our Best Seller</h1>
    </center>
<br>

<br> <!--BR itu buat enter antar baris ditampilan-->

      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="assets/img/coklat.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="menu.php">Kue Coklat</a>
              </h4>
              <p class="card-text">Lelehan coklatnya sama kayak aku ke kamu. Selalu meleleh tiap ada kamu. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="assets/img/keju.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="menu.php">Kue Kastangel</a>
              </h4>
              <p class="card-text">Keju apa yang bikin kesel? Kejujuranmu kalo kamu udah punya orang.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="assets/img/salju.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="menu.php">Kue Putri Salju</a>
              </h4>
              <p class="card-text">Kacang ini gak akan sakit kok, kan gak dikacangin.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="assets/img/kopi.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="menu.php">Kue Bolu Kopi</a>
              </h4>
              <p class="card-text">Minumannya aja udah bikin candu, apalagi sama kue nya. Ditambah ditemenin sama kamu, makin candu.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="assets/img/pisang2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="menu.php">Kue Bolu Pisang</a>
              </h4>
              <p class="card-text">Pisang apa yang bikin deg-degan? Pisangan sama kamu dipelaminan.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="menu.php"><img class="card-img-top" src="assets/img/ketann.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Kue Bolu Ketan</a>
              </h4>
              <p class="card-text">Ketan apa yang bikin seneng? Ketanya kamu sayang aku.</p>
            </div>
          </div>
        </div>
      </div>
     </div>

    <!-- Footer -->
    <div class="footer-main-div">
      <div class="footer-menu-one">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="help.html">Help</a></li>
        </ul>
      </div>

    </div>
    <div class="footer-bottom">
      <p>Copyright &copy<a href="#">Momecake</a></p>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
