<?php
include('sort_store_by_category.php');

$store_file = '../data/store/stores.csv';

$store_file = fopen($store_file, 'r');
$stores = array();

$data = fgetcsv($store_file, 0, ',');//Skip the first row

$current_store='store name';
while ($data = fgetcsv($store_file, 0, ',')) {
    $data[3] = date_create($data[3]);
    $stores[] = $data;
}
fclose($store_file);

$category_file = '../data/categories.csv';

$category_file = fopen($category_file, 'r');
$category = array();

$data = fgetcsv($category_file, 0, ',');//Skip the first row

$current_category='category name';
while ($data = fgetcsv($category_file, 0, ',')) {
    $category[] = $data;
}
fclose($category_file);

$stores_sorted = findStoreBaseOnCategory($stores,$_GET["list"]);



