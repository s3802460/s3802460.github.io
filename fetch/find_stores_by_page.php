<?php

function findItemBaseOnPage($arrays,$timelist=0){
    $new_products= array();
	$index = 0;
    $count=0;
    $str1=0;
    //Newest First
    if ($timelist ==0){
        while (!empty($arrays)){
            foreach ($arrays as $item) {
                if($count==0){
                    $count=$count+1;
                    $str1=$item;
                }
                if ($item[3]>=$str1[3]){
                    $str1 = $item;
                }
            }
            unset($arrays[array_search($str1,$arrays)]);
            $new_products[$index]=$str1;
            $index+=1;
            $count=0;
        }
    }
    //Oldest First
    elseif($timelist ==1){
        while (!empty($arrays)){
            foreach ($arrays as $item) {
                if($count==0){
                    $count=$count+1;
                    $str1=$item;
                }
                if ($item[3]<=$str1[3]){
                    $str1 = $item;
                }
            }
            unset($arrays[array_search($str1,$arrays)]);
            $new_products[$index]=$str1;
            $index+=1;
            $count=0;
        }
    return $new_products;
    }
}