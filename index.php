<?php
$output = null;

// Get year
$output = date('Y');

// Get year with timestamp
$output = date('Y', 936354600);

// Get year with date string
$output = date('Y', strtotime('1991-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('D');
$output = date('l');

// Get date
$output = date('d');

// Get year, month and day
$output = date('Y-m-d');

// Get hour
$output = date('h');

// Get min
$output = date('i');

// Get sec
$output = date('s');

// Get am/pm
$output = date('a');

// Get time
$output = date('Y-m-d h:i:s a')
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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>
