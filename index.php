<?php

// Global scope
$name = 'Alice';

function sayHello (){
    global $name;

    // Loval scope
    $name = 'Bob';
    echo'Hello '. $name;
}


function sayGoodbye(){
    $names = ['Jack', 'Jill'];
    echo 'Goodbye, ' . $names[0];
}

sayGoodbye();

