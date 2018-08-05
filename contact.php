<?php
include "includes/koneksi.php";

$koneksi = new Koneksi();
$db = $koneksi->getConnection();
  
if($_POST){

  include_once 'includes/contact.inc.php';
  $cnt = new Contact($db);

  $cnt->nl = filter_input(INPUT_POST,'full_name',FILTER_SANITIZE_STRING);
  $cnt->em = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
  $cnt->su = filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
  $cnt->ms = filter_input(INPUT_POST,'message', FILTER_SANITIZE_STRING);

  if ($cnt->insert()){
  echo "<script>alert('Terimakasih atas kritik dan sarannya')</script>";
  echo "<meta http-equiv='refresh' content='0; url=contact.php'>";
    }

    else{

      echo "<script>alert('Mohon isi data dengan lengkap')</script>";

    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/glyphicon.css">
    <link href="assets/css/modern-business.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  </head>


<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info fixed-top">
        <img src="assets/img/mome(1).jpg" class="rounded-circle" width="40" height="40"> </img>
        <a class="navbar-brand" href="index.php">MomeCake</a>
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <form action="search.php" method="post" class="form-inline mt-2 mt-md-1 ml-2">
                <input class="form-control form-control-sm mr-sm-2" placeholder="Search Product" aria-label="Search Product" type="text" name="cari">
                <button class="btn btn-sm btn-outline-light my-2 my-sm-0" type="submit">Search</button>
              </form>
            </li>
          </ul>
        </div>
    </nav>
  
  <br>
  <div class="ContactUs">
    <h1>Contact Us</h1>
    <div class="address">
      <p>Contact Us and Well get back to you within 24 hours.</p>
      <p><span class="fa fa-map-marker"></span>&nbsp;&nbsp;&nbsp; Jl. Muchtar Raya RT 10/11 No.44 Petukangan Utara Pesanggrahan Jakarta Selatan</p>
      <p><span class="fa fa-phone"></span>&nbsp;&nbsp;&nbsp; 0818-0722-2067</p>
      <p><span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp; momecakespecialist@gmail.com</p>
    </div>
    <div class="Contact">
      <form method="POST">
        <input type="text" name="full_name" id="Name" placeholder="Enter your Name"/>&nbsp;&nbsp;&nbsp;
        <input type="text" name="email" id="Name" placeholder="Enter your Email"/> <br><br>
        <input type="text" name="subject" id="Sub" placeholder="Enter your Subject"/> <br><br>
        <textarea id="nam" name="message" rows="7" cols="15" placeholder="Enter you Message here"></textarea><br>
        <input type="submit" value="Submit" name="add" class="btn">
      </form>
    </div>
  </div>
  </div>
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
</body>
</html>