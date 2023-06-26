<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Regristration</title>
<style type="text/css" media="screen">
    .error { color: red; }
</style>
</head>
<body>
<h1>Registration Results</h1>
<?php //Script 6.2 - handle_reg.php
/* this script receibes seven values from register.html:
email, password, confirm, year, terms, color, submit  */



//Flag variable to track success:
$okay = true;

if (empty($_POST['email'])) {
    print '<p class="error">Please enter your email address.</p>';
    $okay = false;
}

// Validate the password:
if (empty($_POST['password'])) {
    print '<p class="error">Please enter your passsword.</p>';
    $okay = false;
}

if (is_numeric($_POST['year'])) {
    $age = 2023 - $_POST['year']; // calculate age this year.
} else {
    print '<p class="error">Please enter the year you were born as four digits.<p/>';
    $okay = false;
}

// If there were no errors, print a success message:
if ($okay) {
    print '<p>You have been successfully registared (but not really).</p>';
    print "<p>You will turn $age this year.</p>";
}
?>
</body>
</html>