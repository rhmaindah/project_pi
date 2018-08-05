<?php
    if(!empty($_POST["add"])) {
      require_once("database_connection.php");
      $sql = "INSERT INTO product ( name, summary, price, image ) VALUES ( :name, :summary, :price, :image )";
      $pdo_statement = $connect->prepare( $sql );
        
      $result = $pdo_statement->execute( array( ':name'=>$_POST['name'], ':summary'=>$_POST['summary'], ':price'=>$_POST['price'], ':image'=>$_POST['image'] ) );
      if (!empty($_POST["name"])&&!empty($_POST["summary"])&&!empty($_POST["price"])&&!empty($_POST["image"]) ){
        echo "<script LANGUAGE='JavaScript'>
    window.alert('Data Produk sudah ditambahkan');
    window.location.href='admin_produk.php';
    </script>";
      }
      else{
        echo "<script LANGUAGE='JavaScript'>
    window.alert('Mohon isi data dengan lengkap');
    window.location.href='admin_produk.php';
    </script>";
      }
    }

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
          margin-top: 100px;
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
              <a class="nav-link" href="transaksi.php">Transaksi</a>
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
      <h2 class="my-4">Add Product</h2>
    </center>
    <br>
    <div class="table">
      <form id="Product" method="POST" action="admin_produk.php"">
            <table cellspacing="30">
              <tr>
                <td>Name  </td>
                <td><input type="text" name="name" id="Name" placeholder="Enter your Product Name"/></td>
              </tr>
              <tr>
                <td>Price   </td>
                <td><input type="number" name="price" id="Price" min="1" max="100000"/></td>
              </tr>
              <tr>
                <td>Image   </td>
                <td><input type="file" name="image" accept="image/*" /></td>
              </tr>
              <tr>
                <td>Summary</td>
                <td><textarea id="nam" name="summary" rows="7" cols="15" placeholder="Enter you Summary here"></textarea></td>
              </tr>
              <tr>
                <td> </td>
                <td><input type="submit" value="Submit" name="add" class="btn btn-info my-cart-btn form-control"></td>
              </tr>
                
            </table>
          </form>
    </div>
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
