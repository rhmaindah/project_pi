
<?php
include "includes/koneksi.php";
include ('action.php');
include('includes/login.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <title>Checkout</title>
  <style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }
  * {
    box-sizing: border-box;
  }

  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }

  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }

  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }

  .container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
  }

  input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
  }
  label {
    margin-bottom: 10px;
    display: block;
  }

  .icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
  }

  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  .btn:hover {
    background-color: #45a049;
  }

  a {
    color: #2196F3;
  }

  hr {
    border: 1px solid lightgrey;
  }

  span.price {
    float: right;
    color: grey;
  }
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }
</style>
</head>
<body>
  <h2>Checkout Form</h2>
  <div class="row">
    <div class="col-25">
      <div class="container">
        <form action="/action_page.php">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="fullname" value="<?php echo $_SESSION['full_name'] ?>">
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" value="<?php echo $_SESSION['address'] ?>">
              <label for="tlp"><i class="fa fa-phone"></i> Nomor Telephon</label>
              <input type="text" id="tel" name="notel" value="<?php echo $_SESSION['no_tlp'] ?>">

            <div class="row">
            <div class="col-50">
              <h3>Payment</h3>
              <p>
                Transfer ke Rekening BNI <br>
                1500039374 <br>
                A/N Rahma Indah Safitri <br>
              </p>
            </div>
          </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
      </form>
    </div>
  </div>


<!--Add to cart table-->
   <?php
    if(!empty($_POST["add"])) {
      require_once("database_connection.php");
      $no = 0;
      $buyer = $_SESSION['full_name'];
      $uname = $_SESSION['username'];
      $date = date('Y-m-d'); 
      $date1 = date('Ymdhis');

        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
          $hasilkode = "TR".str_pad($date1, STR_PAD_LEFT);
          $product = $values["product_name"];
          $qty     = $values["product_quantity"];
          $price   = $values["product_price"];

      $sql = "INSERT INTO cart ( id_transaksi, username, buyer, date, product, qty, price ) VALUES ( :id_transaksi, :username, :buyer, :date, :product, :qty, :price )";
      $pdo_statement = $connect->prepare( $sql );
        
      $result = $pdo_statement->execute( array( ':id_transaksi'=>$hasilkode, ':username'=>$uname, ':buyer'=>$buyer, ':date'=>$date, ':product'=>$product, ':qty'=>$qty, ':price'=>$price ) );

        }

        unset($_SESSION["shopping_cart"]);
        echo "<script LANGUAGE='JavaScript'>
    window.alert('Transaksi anda telah kami simpan, kami akan menghubungi anda dalam waktu dekat');
    window.location.href='menu.php';
    </script>";
    }
  ?>
  <!--/add to cart table-->

  <div class="col-25">
    <div class="container">
      <?php 

      $total_price = 0;
      $total_item = 0;
      $output = '
      <div class="table-responsive" id="order_table">
      <table class="table table-bordered table-striped">
      <tr>  
      <th width="1%">No</th>  
      <th width="15%">Product Name</th>  
      <th width="20%">Quantity</th>  
      <th width="25%">Price</th>  
      <th width="20%">Total</th>  
      </tr>
      ';
      if(!empty($_SESSION["shopping_cart"]))
      {
        $no = 1;
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
          $output .= '
          <tr>
          <td>'.$no++.'</td>
          <td>'.$values["product_name"].'</td>
          <td align="center">'.$values["product_quantity"].'</td>
          <td align="center">$ '.$values["product_price"].'</td>
          <td align="center">$ '.number_format($values["product_quantity"] * $values["product_price"], 2).'</td>
          </tr>
          ';
          $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
          $total_item = $total_item + 1;
        }
        $output .= '
        <tr>  
        <td colspan="3" align="center">Total</td>  
        <td align="right">$ '.number_format($total_price, 2).'</td>  
        <td></td>  
        </tr>
        ';
        $pay .='<input type="submit" name="add" value="Pay" class="btn">';

      }
      else
      {
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $output .= '
        <tr>
        <td colspan="5" align="center">
        Your Cart is Empty!
        </td>
        </tr>
        ';
        $pay .='<a align="center"> </a>';
      }
      $output .= '</table></div>';
      echo $output;
      ?>
      <a href="menu.php"><input type="submit" value="Continue Shopping" class="btn"></a>
      <form id="Checkout" method="POST" action="checkout.php">
          <?php 
          echo $pay; 
          ?>
      </form>
  </div>
    </div>
    
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>