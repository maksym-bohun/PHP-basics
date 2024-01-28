<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1=true;
$bool2=false;
$null = null;

// Implicit Conversion

$result = $number1 + $number2;
$result = $number1 + $number2 + $number3;
$result = $number3 . $fruit;
$result = $number1 + $bool1;
$result = $number1 + $bool2;
$result = $number1 + $null;

$result = (int) $number3;
$result = (int) $bool1;
$result = (string) $number1;

var_dump($result);
echo ('<br/>');
