<?php
function findStoreBaseOnCategory($arrays,$id=0){
    $new_stores= array();
	$index = 0;
    foreach($arrays as $array){
    	#take 1st letter from 2nd column to compare
        if($array[2]==$id){
        	$new_stores[$index] = $array;
        	$index= $index +1;
        }
    }
    return $new_stores;
}