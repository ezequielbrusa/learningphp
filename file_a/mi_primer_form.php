<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mi primer Form Page 120</title>
</head>
<body>
<?php
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = nl2br($_POST['posting']);
$age = $_POST['age'];
//$per_account = $_POST['per_account'];
//$bus_account = $_POST['bus_account'];

$full_name =$first_name . ' ' . $last_name;

$html_post = htmlentities($_POST['posting']); 
$strip_post = strip_tags($_POST['posting']);

$older = $age + 10;


print '<div>Thank you, ' . $full_name . ', for your posting:
    <p>' . $posting . '</p>
    <p> keep in mind that in ' . $older . ' years you\'ll be older.</p>';


?>
</body>
</html>