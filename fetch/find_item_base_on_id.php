<?php
//EXP: Find a store base on an Id
function findItemBaseOnId($arrays,$id=0){
    foreach($arrays as $array){
        if($array[0]==$id){
            return $array;
        }
    }
}