<?php


// String
$name = 'Maks Bohun';

var_dump($name);
echo '<br/>';
echo getType($name);
echo '<br/>';

// Integers
$age = 19;
var_dump($age);
echo '<br/>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br/>';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br/>';

//Array
$arr = ['Josn', 1, true];
var_dump($arr);
echo '<br/>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br/>';

// Null
$car = null;
var_dump($car);
echo '<br/>';


// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br/>';

