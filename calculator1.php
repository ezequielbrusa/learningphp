<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cost Calculator</title>
</head>
<body>
<?php  //Script 10.4 Calculator1.php
// This script displays and handles an HTML form. Its function calculate a total from a price and quantity.

// Page 293 Script 10.5 Calculates tax rate.

// Define Tax-Rate;
$tax = 8.75;


//Performs the calculation:
    function calculate_total($quantity, $price) {

        global $tax;  // Script 10.5

        $total = $quantity * $price; // Calculation
        
        $taxrate = ($tax / 100) + 1;  // Script 10.5  Add tax
        $total = $total * $taxrate;   // Script 10.5  Add tax

        $total = number_format($total, 2); // Formating
        
        return $total; // Return the value.
    }

    // Check for a form submission:
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Check for values:
                if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
                
                    // Call the function and print results:
                    $total = calculate_total($_POST['quantity'], $_POST['price']);

                    print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>, including the $tax porcentage tax rate.</p>";

                } else { //Inapropriate vales entered:
                      print '<p style="color: red;">Please enter a valid quantity and price!</p>';
                }
        }
?>
<form action="" method="post">
    <p>Quantity: <input type="text" name="quantity" size="3"></p>
    <p>Price: <input type="text" name="price" size="5"></p>
    <input type="submit" name="submit" value="Calculate!">
</form>

</body>
</html>