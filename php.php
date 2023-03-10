<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Define an array of menu items and prices
$menu = array(
    "Pizza" => 15,
    "Burger" => 12,
    "Fries" => 5,
    "Soda" => 3
);

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the selected menu item and quantity from the form
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $price = $menu[$item];
    $total = $price * $quantity;
    // Display the order summary
    echo "You have ordered $quantity $item(s) at a total cost of $total.";
} else {
    // Display the menu form
    echo "<form method='post'>";
    echo "Select an item: <select name='item'>";
    foreach ($menu as $name => $price) {
        echo "<option value='$name'>$name - $$price</option>";
    }
    echo "</select><br>";
    echo "Quantity: <input type='number' name='quantity'><br>";
    echo "<input type='submit' name='submit' value='Order'>";
    echo "</form>";
}
?>

</body>
</html>