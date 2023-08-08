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

// Check the two passwords for equality:
    if ($_POST['password'] != $_POST['confirm']) {
        print '<p class="error">Your confimed password does not match the original password.</p>';
        $okay = false;
    }



    // Validate the year:
    //Here is the post for the persue assignment: 
        //https://larryullman.com/forums/index.php?/topic/726-chapter-6-pursue/
    if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {
        // CHeck that they were born before 2023:
            if ($_POST['year'] < 2023) {
                $age = 2023 - $_POST['year'];  //Calculate age this year.
            } else {
                print '<p class="error">Either you entered your birth year wrong
                 or you come from the future!</p>';
                 $okay = false;
            } // End  of 2nd conditional.
    }  else { // Else for 1st conditional.
        print '<p class="error">Please enter the year you were born as four digits.</p>';
        $okay = false;
            }  // End of 1st conditional.

// Para el sabado:

$day = $_POST['day'];
$month = ucfirst($_POST['month']);
$year = $_POST['year'];
$dob = $month . '/' . $day . '/' . $year;



    // Validate the terms:
    if ( !isset($_POST['terms'])) {
        print '<p lass="error">You must accept the terms.</p>';
        $okay = false;
    }

   switch ($_POST['color']) {
    case 'red': $color_type = 'primary';
    break;
    case 'yellow': $color_type = 'primary';
    break;
    case 'green': $color_type = 'secondary';
    break;
    case 'blue': $color_type = 'primary';
    break;
    default: 
    print '<p class= "error">Please select your favorite color.</p>';
    $okay = false;
    break;
   } // End of switch.

// If there were no errors, print a success message:
if ($okay) {
    print '<p>You have been successfully registared (but not really).</p>';
    print "<p>You will turn $age this year.</p>";
    print "<p>Your favorite color is a $color_type color.</p>";
    print "<p>Your D.O.B. is $dob</p>";
}

?>
</body>
</html>