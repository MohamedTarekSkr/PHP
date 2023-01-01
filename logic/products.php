<?php
function getProducts()
{
    $products = [];
    $file = fopen('./data/products.csv', 'r') or die();
    while (!feof($file)) {
        $line = fgets($file);
        $arr = explode(',', $line);
        $product = [
            'id' => $arr[0],
            'name' => $arr[1],
            'image' => $arr[7],
            'price' => (float) $arr[2],
            'discount' => (float) $arr[3],
            'rating' => (float) $arr[4],
            'is_featured' => filter_var($arr[5], FILTER_VALIDATE_BOOL) ,
            'rating_count' => (int) $arr[6],
            'is_recent' => filter_var($arr[8], FILTER_VALIDATE_BOOL)
        ];
        array_push($products, $product);
    }
    fclose($file);
    return $products;
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