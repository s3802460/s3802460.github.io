<?php
include('find_products_from_store_id.php');
$product_file = '../data/product/products.csv';

$product_file = fopen($product_file, 'r');
$products = array();
$data = fgetcsv($product_file, 0, ',');

while ($data = fgetcsv($product_file, 0, ',')) {
    $data[3] = date_create($data[3]);
    $products[] = $data;
}
fclose($product_file);

$productpage=findItemBaseOnId($products,$_GET['productid']);

$str1=0;
$index=0;
$count=0;
while ($index<5){
	foreach ($products as $item) {
		//comparison for first product
		if($count==0){
			$count=$count+1;
			$str1=$item;
		}
		if ($item[3]>=$str1[3]){
	        $str1 = $item;
		}
	}
	unset($products[array_search($str1,$products)]);
	$new_products5[$index]=$str1;
	$index+=1;
	$count=0;
}
