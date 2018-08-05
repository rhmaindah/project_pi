<?php

//fetch_item.php

include('database_connection.php');

if(isset($_POST['cari'])){

                            $asd    = '<div class="row">';
                            $asd1   = '</div>';
                            $param  = $_POST['cari'];
                            $param  = 'keju';
                            $query  = $connect->prepare("SELECT * FROM product WHERE name LIKE :param OR summary LIKE :param ");
                            $query->bindValue(':param', '%'.$param.'%', PDO::PARAM_STR);
                            $query->execute();
                            if($query->rowCount() > 0 ){
                                
                                while ($r = $query->fetch()) {

                                    error_reporting(E_ALL^(E_NOTICE|E_WARNING));  
                                    $output .= '
                                    <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="assets/img/'.$r['image'].'" alt=""></a>
                                    <div class="card-body">
                                    <h4 class="card-title">
                                    <a href="#">'.$r['name'].'</a>
                                    </h4>
                                    <h5>Rp. '.$r['price'].'</h5>
                                    <p class="card-text">'.$r['summary'].'</p>
                                    </div>
                                    <div class="card-footer">
                                    <small class="text-muted">Rate &#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                    <input type="number" name="quantity" id="quantity' . $r["id"] .'" class="form-control" value="1" />
                                    <input type="hidden" name="hidden_name" id="name'.$r["id"].'" value="'.$r["name"].'" />
                                    <input type="hidden" name="hidden_price" id="price'.$r["id"].'" value="'.$r["price"].'" />
                                    <input type="button" name="my-cart-btn" id="'.$r["id"].'" style="margin-top:5px;" class="btn btn-info my-cart-btn form-control" value="Add to Cart" />
                                    </div>
                                    </div>
                                    </div>';
                              }//end while
                              
                                echo $asd.$output.$asd1;

                            }else{
                                
                                echo "<tr><td colspan=\"4\">Not Found</td></tr>";
                            }
                            
                        }//end if
                    

?>