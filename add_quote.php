<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add a Quotation</title>
    </head>
    <body>
        <?php  // SCript 11.1 Add_quote.php
        /* Displays  and handles an HTML form. It takes text input and stores it in a file  */
        
        //Identify the fiile to use:
            $file = '/quotes.txt';  // ??? No se si identifico bien el file!! El libro dice ../quotes.txt

            // Check for a form submission:
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // Handle the form
                  if ( !empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.')) {
                    // Need something to write.
                    if (is_writable($file)) {
                        //Confirm that the file is writable.
                        file_put_contents($file, $_POST['quote'] . PHP_EOL, FILE_APPEND | LOCK_EX); // Write the data. // SCRIPT 11.2--> LOCK_EX.

                        //Print a message:
                        print '<p>Your quotation has been stored.</p>';
                    } else {  // Could not open the file.
                        
                        print '<p style="color: red;">Your quotation could not be stored due to a system error.</p>';
                    }
                  } else {  // Failed to anter a quotation.
                    print '<p style="color: red;">Please enter a quotation!</p>';

                  }
                } // End of submitted IF.
        ?>

        <form action="add_quote.php" method="post">
            <textarea name="quote" row="5" cols="30">Enter your quotation here.</textarea><br>
            <input type="submit" name="submit" value="Add this Quote!">
        </form>
    </body>
</html>