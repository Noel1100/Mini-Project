<?php
session_start();
include 'config.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])) {
    // Get the product ID to be removed from the cart
    $productId = $_POST["product_id"];
    $username = $_SESSION['username'];

    // SQL query to remove the item from the cart table
    $removeCartItemQuery = "DELETE FROM cart WHERE product_id = ? AND username = ?";
    $stmt = $conn->prepare($removeCartItemQuery);

    if ($stmt) {
        $stmt->bind_param("is", $productId, $username);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Item removed successfully!";
        } else {
            echo "Failed to remove the item from the cart.";
        }

        $stmt->close();
    } else {
        echo "Error: Unable to prepare the SQL statement.";
    }

    $conn->close();
} else {
    echo "Invalid request!";
}
?>
