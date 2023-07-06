<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>No soup for you!</title>
</head>
<body>
    <h1>Mm...soups</h1>
    <?php // Script 7.3 - soup3.php
/* This script creates and prints out an array. */

// Create the array:
$soups = [
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian',
    'Thursday' => 'Chicken Noodle',
    'Friday' => 'Tomato',
    'Saturday' => 'Cream of brocoli'
];

// Print each key and value:
foreach($soups as $day => $soup) {
    print "<p>$day: $soup</p>\n";
}
    ?>
</body>
</html>