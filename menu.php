<?php
include 'includes/koneksi.php';
$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Our Product</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/shop-homepage.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

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
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li>
            <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart" style="color:white;">
              <span class="fa fa-shopping-cart"></span>
              <span class="badge"></span>
              <span class="total_price">$ 0.00</span>
            </a>
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

  <div id="popover_content_wrapper" style="display: none">
    <span id="cart_details"></span>
    <div align="right">
      <a href="checkout.php" class="btn btn-primary" id="check_out_cart">
        <span class="fa fa-shopping-cart"></span> Check out
      </a>
      <a href="#" class="btn btn-default" id="clear_cart">
        <span class="fa fa-trash"></span> Clear
      </a>
    </div>
  </div>



  <!-- Page Content -->
  <div class="container">
    <center>
      <h2 class="my-4">Our Product</h2>
    </center>

    
    <div id="display_item">


    </div>
  </div>


    <!-- Footer -->
    <br>
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
  <script>  
    $(document).ready(function(){
      load_product();
      load_cart_data();   
      function load_product()
      {
        $.ajax({
          url:"fetch_item.php",
          method:"POST",
          success:function(data)
          {
            $('#display_item').html(data);
          }
        });
      }
      function load_cart_data()
      {
        $.ajax({
          url:"fetch_cart.php",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
            $('#cart_details').html(data.cart_details);
            $('.total_price').text(data.total_price);
            $('.badge').text(data.total_item);
          }
        });
      }

      $('#cart-popover').popover({
        html : true,
        container: 'body',
        content:function(){
          return $('#popover_content_wrapper').html();
        }
      });

      $(document).on('click', '.my-cart-btn', function(){
        var product_id = $(this).attr("id");
        var product_name = $('#name'+product_id+'').val();
        var product_price = $('#price'+product_id+'').val();
        var product_quantity = $('#quantity'+product_id).val();
        var action = "add";
        if(product_quantity > 0)
        {
          $.ajax({
            url:"action.php",
            method:"POST",
            data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
            success:function(data)
            {
              load_cart_data();
              alert("Item has been Added into Cart");
            }
          });
        }
        else
        {
          alert("Please Enter Number of Quantity");
        }
      });

      $(document).on('click', '.delete', function(){
        var product_id = $(this).attr("id");
        var action = 'remove';
        if(confirm("Are you sure you want to remove this product?"))
        {
          $.ajax({
            url:"action.php",
            method:"POST",
            data:{product_id:product_id, action:action},
            success:function()
            {
              load_cart_data();
              $('#cart-popover').popover('hide');
              alert("Item has been removed from Cart");
            }
          })
        }
        else
        {
          return false;
        }
      });

      $(document).on('click', '#clear_cart', function(){
        var action = 'empty';
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{action:action},
          success:function()
          {
            load_cart_data();
            $('#cart-popover').popover('hide');
            alert("Your Cart has been clear");
          }
        });
      });

    });

  </script>
