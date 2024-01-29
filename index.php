<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6,];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names[0];
// echo $numbers[4];

// Add element to array
$numbers[6] = 100;
$numbers[] = 1001; // push to the array

$numbers[3] = 200;

unset($numbers[3]);

$numbers = array_values($numbers);
inspect($numbers);

