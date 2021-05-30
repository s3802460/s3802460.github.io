<?php
function findProductsBaseOnId($arrays,$id=0){
	$index=0;
	$products=array();
    foreach($arrays as $array){
        if($array[4]==$id){
        	$products[$index]= $array;
        	$index+=1;
        }
    }
    return $products;
}