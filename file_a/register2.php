<?php // Script 8.9 - register2.php
/* This page lets people register for the site (in theory). */

// Set the page title and include the header file:
define('TITLE', 'Register');
include("templates/header.php");

// Introductory text:
print '<h2>Registration Form</h2>
<p>Register so you can take advantage of certain features like this, that, and the other thing.</p>';

//Check if the form has been submited:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$problem = false;

// Check for each value:  1- First name. 2-LAst name. 3-Email. 4-Password. 
if (empty($_POST['first_name'])) {
$problem = true;
print '<p class="text--error">Please enter your first name!</p>';
}
    
if (empty($_POST['last_name'])) {
$problem= true;
print '<p class="text--error">Please enter your last name!</p>';
}

if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1)) { //page 229 Check for only 1 email.
    $problem= true;
    print '<p class="text--error">Please enter your email address!</p>';
    }
    
    if (empty($_POST['password1'])) {
        $problem= true;
        print '<p class="text--error">Please enter a password!</p>';
        }
        
        if ($_POST['password1'] != $_POST['password2']) {
            $problem= true;
            print '<p class="text--error">Yourd password did nor match your confirmed password!</p>';
            }
            
if (!$problem) { // There weren't any problems:
print '<p class="text-success">You are now registered!<br>Okay, you are not registered but...</p>';

// Send the email. Page 229
  $body = "Thank you, {$_POST['first_name']}, for registering with the J.D. Salinger fan club!";
  mail($_POST['email'],'Regiatration confirmation', $body, 'From: admin example@com');


// CLear the posted value:
$_POST = [];

} else { // Forgot a field:
print '<p class="text--error">Please try again!</p>';
}

}   // End of handle form IF.
// Createn the form:
    ?>
    
    <form action="register2.php" method="post" class="form--inline">

<p><label for="first_name">First Name:</label><input type="text" name="first_name" size="20"
 value="<?php if (isset($_POST['first_name'])) {
print htmlspecialchars($_POST['first_name']);
 } ?>"></p>

<p><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20"
 value="<?php if (isset($_POST['last_name'])) {
print htmlspecialchars($_POST['last_name']);
 } ?>"></p>

<p><label for="email">Email Address:</label><input type="email" name="email" size="20"
 value="<?php if (isset($_POST['email'])) {
print htmlspecialchars($_POST['email']);
 } ?>"></p>

<p><label for="password1">Password:</label><input type="password" name="password1" size="20"
value="<?php if (isset($_POST['password1'])) {
    print htmlspecialchars($_POST['password1']);
} ?>"></p>
<p><label for="password2">Confirm Password:</label><input type="password" name="password2" size="20"
value="<?php if (isset($_POST['password2'])) {
    print htmlspecialchars($_POST['password2']);
} ?>"></p>

<p><input type="submit" name="submit" value="Register!" class="buttom--pill"></p>

</form>

<?php include('templates/footer.php');
// Need the footer
?> 