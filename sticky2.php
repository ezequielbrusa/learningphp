<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sticky Text Inputs</title>
</head>
<body>
    <?php  //Script 10.2 - Sticky.php
    /* This script defines and calls a function that creates a sticky text input. */

    // This function makes a sticky text input.
// This function requires two arguments be passed to it.
function make_text_input($name, $label, $size = 20) {      //Script 10.3 added default value. Optional
 
    // Begin paragraph and label:
    print '<p><label>' . $label . ': ';

    // input:
    print '<input type="text" name="' . $name . '" size="' . $size . '" ';

    // Value:
    if (isset($_POST[$name])) {
        print ' value="' . htmlspecialchars($_POST[$name]) . '"';
    }

    // Complete input, label and paragraph:
    print '></label></p>';
} // End of function.

// Make the form:
    print '<form action="" method="post".';

    // Create text inputs:

make_text_input('first_name', 'First Name');
make_text_input('last_name', 'Last Name', 30);
make_text_input('email', 'Email address', 50);

print '<input type="submit" name="submit" value="Register!"></form>';

    ?>
</body>
</html>