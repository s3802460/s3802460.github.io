<?php
include('find_stores_by_page.php');
include('../store/find_products_from_store_id.php');
$product_file = '../data/product/products.csv';

$product_file = fopen($product_file, 'r');
$products = array();
$data = fgetcsv($product_file, 0, ',');

while ($data = fgetcsv($product_file, 0, ',')) {
    $data[3] = date_create($data[3]);
    $products[] = $data;
}
fclose($product_file);

$products = findProductsBaseOnId($products,$_SESSION['storeid']);

$sorted_products = findItemBaseOnPage($products,$_GET['timelist']);

$page_products= array();
$index=0;
