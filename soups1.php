<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>No soup for you!</title>
</head>
<body>
    <h1>Mm...soups</h1>
    <?php // Script 7.1 - soup1.php

    // Create the array:
    $soups = [
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday' => 'Vegetarian',
    ];

    // Count and print hte current number of elements:
    $count1 = count($soups);
    print "<p>The soups array originally
    had $count1 elements.</p>";

    // Add three items to the array:
    $soups['Thursday'] = 'Chicken Noodle';
    $soups['Friday'] = 'Tomato';
    $soups['Saturday'] = 'Cream of brocoli';

// Count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements.</p>"; 

   // Print the contents of the array:
    print_r($soups);
    ?>
</body>
</html>