<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/


$output = null;

$num1 = 20;
$num2 = 10;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;


// Assignment operator
$num3 = 10;
$num3 += 20;

$output = $num3;

// Built-in PHP functions
// rand()
$output = rand();
$output = getrandmax();
$output = rand(1, 100);

//round()
$output = round(0.47, 1);

// ceil()
$output = ceil(4.3);

// floor()
$output = floor(4.3);

// abs()
$output = abs(-2.4);

// max()
$output = max(1,2,40,23,40.001);
$output = max([1,2,40,23,40.001]);

// min()
$output = min([1,2,40,23,40.001]);

$output = number_format(123456789.19234, 2, '.', ',')

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>
