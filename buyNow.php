<?php
include 'config.php';

// Get data from AJAX request
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$username = $_SESSION['username']; // Assuming you have a valid session

// Add your logic for handling Buy Now action, e.g., creating an order, redirecting to payment page, etc.

echo "Buy Now action handled successfully!";

$conn->close();
?>
