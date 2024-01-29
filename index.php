<?php
$output = null;

$ids = [10, 22, 12, 43, 56];
$users = ['user2', 'user1', 'user3'];

$output = count($ids);

// sort
sort($ids); 
sort($users); 

// rsort
rsort($ids);

// array_push
array_push($ids,500);
array_push($users,'user4');

// array_pop
array_pop($ids);
array_pop($users);

// array_shift
array_shift($ids);

// array_unshift
array_unshift($users, 'user5');

// array_slice
$ids2 = array_slice($ids, 2, 2);
// var_dump($ids2)

// array_splice
// array_splice($ids, 1, 1, 'New id');

// array_sum
    $output = 'Sum of IDs: '. array_sum($ids);

// array_search
$output = 'User 2 is at index: ' . array_search('user2', $users);

// explode
$tags = 'tech, code, js, py, node.js';
$tagsArr = explode(', ', $tags);
// var_dump($tagsArr);

//implode
$output = implode(', ', $users);

// in_array
// $output = 'User 3 exists: ' . in_array('user3', $users);

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
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">Ids array:</h2>
            <p>
                <pre>
                    <?php print_r($ids) ?>
                </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users array:</h2>
            <p>
                <pre>
                    <?php print_r($users) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>
