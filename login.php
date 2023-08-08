<?php // Script 8.8 - Login.php. THis page let people log in into a site + Script 8.13

// Set the page  title and include the header file:
define('TITLE', 'Login');
include('templates/header.php');

// Print some introductory text:
print '<h2>Login Form</h2>
<p>Users who are logged in can take advantage of certain feauters like this, that, and the other thing.</p>';

// CHeck if the request form has been submited:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
        // Handle the form:
     if ( (!empty($_POST['email'])) && (!empty($_POST['password'] ) ) ) {

     if ( (strtolower($_POST['email'] ) == 'me@xample.com' ) && ($_POST['password'] == 'testpass') ) { //correct!

       session_start();                 // Pag 262  Script 9.6.   
$_SESSION['email'] = $_POST['email'];   // Pag 262  Script 9.6. 
$_SESSION['loggedin'] = time();         // Pag 262  Script 9.6.

       // print '<p class="text--success">You are logged in!<br>Now you can blah, blah, blah...</p>';
// Page 238 "THe use of header function"-> Redirect the user to the welcome page:
    ob_end_clean(); // Destroy the buffer!
    header('Location: welcome.php');
    exit();
      
     } else { // Incorrect!
              print '<p class="test--error">The submitted email address and password do not match those on file!<br>Go back and try again.</p>';
            }

     } else {  // Forgot a field!
             print '<p class="text--error">Please make sure you enter both an email address ans a password!<br>Go back and try again.</p>';          
            }
    }  else {  // Display the form.

    print '<form action="login.php" method="post" class="form--inline">
    <p><label for="email">Email Address:</label><input type="email" name="email" size="20"</p>

    <p><label for="password">Password:</label><input type="password" name="password" size="20"</p>

    <p><input type="submit" name="submit" value="Log In!" class="button--pill"</p>
           </form>';
    }

include('templates/footer.php');
?>