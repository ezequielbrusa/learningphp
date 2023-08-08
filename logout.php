<?php // Script 9.8- logout.php
/* This session is the logout page. It destroys the session information. */

// Need the session
session_start();

// Reset the session array:
$_SESSION = [];

// Destroys the session data on the server:
session_destroy();

// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.php');

?>

<h2>Welcome to the J.D. Salinger Fan CLub!</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope tha you liked it.<br>
Blah, blah, blah...
Blah, blah, blah...</p>

<?php include('templates/footer.php'); ?>