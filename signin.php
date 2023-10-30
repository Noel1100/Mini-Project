<?php
session_start();  // Start the session

include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if form was submitted
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL query to check if the user exists with the given email and password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, get their id and redirect accordingly
        $row = $result->fetch_assoc();
        $userId = $row['id'];

        $_SESSION['username'] = $row['username'];  // Set the username in the session
        $_SESSION['user_id'] = $userId;  // Set the user ID in the session
        $_SESSION['login'] = true;  // Set the login status in the session

        if ($userId == 0) {
            // Admin
            header("Location: admin.php");
            exit();
        } elseif ($userId == 1) {
            // Regular user
            header("Location: profile.php");
            exit();
        } elseif ($userId == 2) {
            // Seller
            header("Location: seller.php");
            exit();
        } else {
            // Invalid user id
            echo "Invalid user ID.";
        }
    } else {
        // User not found, display an error message
        echo "User does not exist.";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="main">

<!-- Sign in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="signup.html" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form method="POST" class="register-form" id="login-form">
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="email" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- JS -->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="js/login.js"></script>
</body>
</html>