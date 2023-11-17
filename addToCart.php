<?php
include 'config.php';

// Get data from AJAX request
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$username = $_SESSION['username']; // Assuming you have a valid session

// Calculate the total price based on quantity and unit price
$total = $quantity * $price;

// Insert data into the cart table
$sql = "INSERT INTO cart (product_id, username, quantity, total) VALUES ('$product_id', '$username', '$quantity', '$total')";
$result = $conn->query($sql);

if ($result) {
    echo "Product added to cart successfully!";
} else {
    echo "Error adding product to cart: " . $conn->error;
}

$conn->close();
?>
