<?php
require_once("database_connection.php");
?>

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
          margin-top: 250px;
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
        <a class="navbar-brand" href="index.php">MomeCake</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index2.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
    </nav>

<br>
    <!-- Page Content -->
   <div class="container">
      <center>
      <h2 class="my-4">Transaction Data</h2>
    </center>
    <br>
<?php  
  $pdo_statement = $connect->prepare("SELECT * FROM cart ORDER BY date DESC");
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();
?>

  <table class="table table-striped">
  <tr>
    <th class="table-header">Transaction ID</th>
    <th class="table-header">User</th>
    <th class="table-header">Buyer</th>
    <th class="table-header">Date</th>
    <th class="table-header">Product</th>
    <th class="table-header">Quantity</th>
    <th class="table-header">Price</th>

  </tr>

  <?php

  if(!empty($result)) { 
    foreach($result as $row) {
  ?>
    <tr class="table-row">
    <td><?php echo $row["id_transaksi"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["buyer"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["product"]; ?></td>
    <td><?php echo $row["qty"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    </tr>
    <?php
    } 
  }
  else{
    echo "There is no transaction to show";
  }
  ?>

</table>
</div>
        

<!-- Footer -->
    <div class="footer-bottom">
      <p>Copyright &copy<a href="#">Momecake</a></p>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
