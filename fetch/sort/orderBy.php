<?php
function orderBy($array = array(), $sortBy)
{
    if ($sortBy == 'asc') {
        usort($array, function ($a, $b) {
            $retval = ($a[3] <=> $b[3]);
            return $retval;
        });
    }
    if ($sortBy == 'desc') {
        usort($array, function ($a, $b) {
            $retval = ($a[3] <=> $b[3])*(-1);
            return $retval;
        });
    }
    if(!in_array($sortBy,['asc','desc'])){
        $array[0] = 'WRONG SYNTAX, EXPECT ARGUMENT 2 ASC OR DESC';
    }
    return $array;
}