<?php
include('sort/orderBy.php');
// fetch store data and sort by field createAt
$store_file = 'data/store/stores.csv';

$store_file = fopen($store_file, 'r');
$stores = array();

$data = fgetcsv($store_file, 0, ',');//Skip the first row

$current_store='store name';
while ($data = fgetcsv($store_file, 0, ',')) {
    $data[3] = date_create($data[3]);
    $stores[] = $data;
}
fclose($store_file);

$store_sorted = orderBy($stores, 'desc'); //arg1: Array need to sort, arg2: asc or desc

$new_stores = array();
$featured_stores = array();
$index = 0;
foreach ($stores as $item) {
    if ($item[4]) {
        $featured_stores[$index] = $item;
        $index = $index + 1;
    }
    if ($index >= 10) {
        break;
    }
}
$index = 0;
foreach ($store_sorted as $item) {
    $new_stores[$index] = $item;
    $index = $index + 1;
    if ($index >= 10) {
        break;
    }
}



// fetch product data and sort by field createAt
$product_file = 'data/product/products.csv';

$product_file = fopen($product_file, 'r');
$products = array();

$data = fgetcsv($product_file, 0, ',');//Skip the first row

while ($data = fgetcsv($product_file, 0, ',')) {
    $data[3] = date_create($data[3]);
    $products[] = $data;
}
fclose($product_file);

$product_sorted = orderBy($products, 'desc'); //arg1: Array need to sort, arg2: asc or desc

$new_products = array();
$featured_products = array();


$index = 0;
foreach ($products as $item) {
    if ($item[5]) {
        $featured_products[$index] = $item;
        $index = $index + 1;
    }
    if ($index >= 10) {
        break;
    }
}
$index = 0;
foreach ($product_sorted as $item) {
    $new_products[$index] = $item;
    $index = $index + 1;
    if ($index >= 10) {
        break;
    }
}

// $new_stores
// $new_products
// $featured_stores
// $featured_products