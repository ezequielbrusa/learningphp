<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My first php</title>
</head>

<body>
    <?php
$n1 = mt_rand(1, 10);
$n2 = mt_rand(11, 19);
$n3 = mt_rand(5, 10);
$n4 = mt_rand(2, 8);

$n5 = $n1 + $n2;
$n6 = $n3 - $n4;
$n7 = $n1 * $n2 * $n3 * $n4;

number_format($n7, 10);

print "<p>My numbers are<br>
$n5<br>
$n6<br>
$n7</p>"




    ?>


</body>

</html>
