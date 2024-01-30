<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

function fahrenheitToCelsius ( $fahrenheitTemp){
    return ($fahrenheitTemp - 32) * (5/9);
}

echo '<br>';
echo fahrenheitToCelsius(40);

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

function printNamesToUpperCase ($names){
    foreach($names as $name){
        echo strtoupper($name). ', ';
    }
}

echo '<br>';
printNamesToUpperCase(['Maks', 'tom']);

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord ($sentence){
    $words = explode(' ',  trim($sentence));
    $lettersInWords = [];
    echo '</br> <pre>';
    var_dump($words);
    echo '</br></pre>';

    foreach($words as $word){
      array_push($lettersInWords, strlen($word));
    }

    // $longestWordIndex = $lettersInWords[max($lettersInWords)];
    $indexOfShortestWord = array_search(max($lettersInWords), $lettersInWords);
    echo 'Longest word:  ' . $words[$indexOfShortestWord]; 
}

findLongestWord('Hello my name is Maksym');
