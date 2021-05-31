<?php
include('sort_store_by_name.php');

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

$stores_sorted = findStoreBaseOnKey($stores,$_GET["key"]);

$new_stores= array();
$index = 0;
foreach ($stores_sorted as $item) {
    $new_stores[$index] = $item;
    $index = $index + 1;
}