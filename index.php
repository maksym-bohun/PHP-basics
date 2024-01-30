<?php

$numbers =[1,2,3,4,5];

$square = function($number){
    return $number * $number;
};

$squaredNumbers = array_map($square, $numbers);

// print_r($squaredNumbers);

function applyCallback($callback, $value){
    return $callback($value);
}

$double = function($number){
    return $number * 2;
};

$res = applyCallback($double, 4);

echo $res;