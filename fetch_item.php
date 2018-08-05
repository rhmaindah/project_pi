<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM product ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
  $asd = '<div class="row">';
  $asd1 = '</div>';
  foreach($result as $row)
  {
    $output .= '
    <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
    <a href="#"><img class="card-img-top" src="assets/img/'.$row['image'].'" alt=""></a>
    <div class="card-body">
    <h4 class="card-title">
    <a href="#">'.$row['name'].'</a>
    </h4>
    <h5>Rp. '.$row['price'].'</h5>
    <p class="card-text">'.$row['summary'].'</p>
    </div>
    <div class="card-footer">
    <small class="text-muted">Rate &#9733; &#9733; &#9733; &#9733; &#9734;</small>
    <input type="number" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
    <input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
    <input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
    <input type="button" name="my-cart-btn" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-info my-cart-btn form-control" value="Add to Cart" />
    </div>
    </div>
    </div>
    ';
  }
  echo $asd.$output.$asd1;
}


?>