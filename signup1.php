<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if form was submitted
    $username = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['re_pass'];

    // Validate form data (check for empty fields)
    if (empty($username) || empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "INSERT INTO users (username, firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ssssss", $username, $fname, $lname, $email, $phone, $password);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Record created successfully";
            } else {
                echo "Error executing statement: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>