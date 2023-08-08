<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Forum Posting</title>
</head>
<body>
    <?php // Script 5.2  - handle_post.php
    /* This script receives five values from posting.html: 
    first_name, last_name, email, posting, submit */

 // Address error management, if you want.

 // Get the value from the $_POST array:
 $first_name = trim($_POST['first_name']);
 $last_name = trim($_POST['last_name']);
 $posting = trim($_POST['posting']);
 

 // Create a full name variable:
 $name = $first_name . ' ' . $last_name;

//adjust for HTML tags:
    // $html_post = htmlentities($_POST['posting']); 
    // $strip_post = strip_tags($_POST['posting']);

// Geet a word count:
$words = str_word_count($posting);

// Get a snippet of the posting:
       //$posting = substr($posting, 0, 50);

 // Take out the bad words:
 $posting = str_ireplace('badword', 'XXXXX', $posting);      

 // Print a message: double quotes, no concatenation.
 /*print "<div>Thank you, $name, for your posting:
    <p>$posting</p>
    <p>($words words)</p></div>";*/

    // Print with concatenation and single quotes:
    print '<div>Thank you, ' . $name . ', for your posting:
        <p>' . $posting . '</p>
        <p>(' . $words . ' words)</p></div>';




    //Make a link to another page:
// $name = urlencode($name);
// $email = urlencode($_POST['email']);
// print "<p>Click <a href=\"thanks.php?name&email=$email\">here</a> to continue.</p>";

    ?>


</body>


</html>