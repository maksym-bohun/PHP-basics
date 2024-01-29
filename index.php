<?php 

$number = 1;

// while($number <= 10){
//     if($number % 2 == 0){
//         echo $number . ' is odd </br>';
//     } else{
//         echo $number . ' is even </br>';
//     }
//     $number ++;
// }


// Break
// for($i = 1; $i <=10; $i++){
//     if($i == 5){
//         break;
//     }
//     echo $i . '</br>';
// }

// Skip and continue

// for($i = 1; $i <=10; $i++){
//     if($i == 5){
//         continue;
//     }
//     echo $i . '</br>';
// }

$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Kate' => 100,
    'Wilson' => 65
);

foreach($studentGrades as $name => $grade){
    if($grade >= 90){
        echo $name . ' has great grade! </br>';
    }
}