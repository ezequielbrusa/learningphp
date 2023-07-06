<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Larry Ullman's Books and Chapters</title>
</head>
<body>
    <h1>Some of LArry Ullman's Books</h1>
<?php // Script 7.4 - Books.php
/* This script creates and prints out a multidimensional array
*/

// First array:
$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 
'HtML Forms and PHP', 'Using Numbers'
];
// Second array:
$phpadv = [1 => 'Advanced PHP Techniques', 
'Developing Wev Applications', 'Advanced Database Concepts',
'Basic Object-Oriented Programming'
];
// Third Array:
$phpmysql =[1 => 'Introduction to PHP', ' Programming with PHP', 
'Creating Dinamic Websites', 'Introduction to MySQL'
];
// Create a multidimensional array:
$books = [
    'PHP VQS' => $phpvqs,
    'PHP Advanced VQP' => $phpadv,
    'PHP and MySQL VQP' => $phpmysql
];

// Print out some values:
print "<p>The third chapter of my first book is 
<i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The second chapter of my second book is
 <i>{$books['PHP Advanced VQP'][1]}
</i>.</p>";
print "<p>
The fourth chapter of my fourth book is 
<i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// See what happens with foreach:
   /* foreach ($books as $key => $value) {
        print "<p>$key: $value</p>\n";
    }  */

    // To access every element of every array, you can nest two
    // foreach looops like this:
        foreach ($books as $title => $chapters) {
            print "<p>$title";
            foreach ($chapters as $number => $chapter) {
            print "<br />Chapter $number is $chapter"; 
            }
            print '</p>';
        }

        print_r($books)
?>
</body>
</html>