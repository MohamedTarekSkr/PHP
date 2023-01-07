<?php
require_once(BASE_PATH . 'dal/dal.php');
function getProducts()
{
  $query = "SELECT p.*,c.name category_name,s.name size_name,cl.name color_name FROM products p
  JOIN categories c ON p.category_id = c.id
  JOIN sizes s on s.id = p.size_id
  JOIN colors cl on cl.id = p.color_id";
    return get_rows($query);
}
function stars($rating){
for ($x = 1; $x <= 5; $x++) {
  if($rating >= $x){
    echo '<small class="fa fa-star text-primary mr-1"></small>';
  }elseif($rating  >= ($x - 0.5)){
    echo '<small class="fa fa-star-half-alt text-primary mr-1"></small>';
  }else{
    echo '<small class="far fa-star text-primary mr-1"></small>';
  }
}
}