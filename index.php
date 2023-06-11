<?php

$helloWorld = 'Hello ';
$selected = false;

if ($selected) {
    $helloWorld .= "Jose";
} else {
    $helloWorld .= "Ezequiel";
}

?>

<html>
    <h1><?= $helloWorld ?></h1>
</html>