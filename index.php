<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers = [1, 2, 3, 4, 5, 6];
$numbersSum = array_sum($numbers);
$numbersCount = count($numbers);


echo "<h3>The sum of the $numbersCount numbers is : $numbersSum</h3>";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/


$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);
array_push($colors, 'purple', 'orange');
array_splice($colors, 1, 1, 'pink');
array_pop($colors);


echo "<h3>Colors Array </h3>";
echo"<pre>";
print_r($colors);
echo"</pre>";

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$jobs = [
    ['id' => 1, 'job_title' => 'Junior Frontend Developer', 'company' => 'GlobalLogic', 'contact_email' => 'globallogic@gmail.com', 'contact_phone' => '+380955577575', 'skills'=> ['JavaScript', 'CSS', 'HTML', 'React.js']],
    ['id' => 2, 'job_title' => 'Junior Full stack Developer', 'company' => 'Soft Serve', 'contact_email' => 'softserve@gmail.com', 'contact_phone' => '+380988877878', 'skills'=> ['JavaScript', 'CSS', 'HTML', 'Node.js', 'MondoDB']],
    ['id' => 3, 'job_title' => 'Junior Android Developer', 'company' => 'Ciclum', 'contact_email' => 'ciclum@gmail.com', 'contact_phone' => '+380987773537', 'skills'=> ['Kotlin', 'Java']],
];

array_push($jobs, 
['id' => 4, 'job_title' => 'Junior UI/UX Designer', 'company' => 'Genesis', 'contact_email' => 'genesis@gmail.com', 'contact_phone' => '+380505550505', 'skills'=> ['Figma', 'Photoshop', 'Illustrator']],
);


echo $jobs[1]['job_title'];
echo '</br>';
echo $jobs[2]['skills'][0];
echo '</br>';

echo"<pre>";
print_r($jobs);
echo"</pre>";