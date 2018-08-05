<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/modern-business.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <style type="text/css">
      .footer-bottom{
          width: 100%;
          height: auto;
          margin: auto;
          margin-top: 30px;
          background: #009688;
          padding: 5px;
      }
      .footer-bottom p{
          font-family: sans-serif;
          font-size: 15px;
          text-align: center;
          color: #fff;
          font-weight: 600;
          letter-spacing: 3px;
      }
      .footer-bottom p a{
          color: #fff;
      }
      .footer-bottom p a:hover{
          color: #2C3A47;
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info fixed-top">
        <img src="assets/img/mome(1).jpg" class="rounded-circle" width="40" height="40"> </img>
        <a class="navbar-brand" href="index2.php">MomeCake</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <center>
      <h2 class="my-4">Dashboard Admin</h2>
    </center>
<br>

<div class="row">
            <!--Menu 1-->
            <div align="center" class="col-lg-4 col-md-5 mb-4">
              <div class="card h-100">
                <a href="admin_produk.php"><img class="img-thumbnail" src="assets/img/plus.jpg"  height="500" width="468"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="admin_produk.php" >Add Product</a>
                  </h4>
                </div>
              </div>
            </div>

            <!--Menu 2-->
            <div align="center"class="col-lg-4 col-md-5 mb-4">
              <div class="card h-100">
                <a href="transaksi.php"><img class="img-thumbnail" src="assets/img/cart1.jpg" height="500" width="468" ></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="transaksi.php">Transaction Data</a>
                  </h4>
                </div>
              </div>
            </div>
</div>
      <!-- /.row -->

  
    <!-- /.container -->

    <!-- Footer -->
    

    </div>
    <div class="footer-bottom">
      <p>Copyright &copy<a href="#">Momecake</a></p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
