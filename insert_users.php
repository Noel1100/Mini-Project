<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['re_pass'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $state = $_POST['state'];

    // Check for empty fields
    if (empty($username) || empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($confirm_password) || empty($address) || empty($city) || empty($postalcode) || empty($state)) {
        echo "All fields are required.";
    } else {
        // Insert user data into 'users' table
        $userSql = "INSERT INTO users (username, firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)";
        $userStmt = $conn->prepare($userSql);
        $userStmt->bind_param("ssssss", $username, $fname, $lname, $email, $phone, $password);
        $userResult = $userStmt->execute();

        // Insert address data into 'address' table
        $addressSql = "INSERT INTO address (username, address, city, `postal code`, state) VALUES (?, ?, ?, ?, ?)";
        $addressStmt = $conn->prepare($addressSql);
        $addressStmt->bind_param("sssss", $username, $address, $city, $postalcode, $state);
        $addressResult = $addressStmt->execute();

        if ($userResult && $addressResult) {
            echo "Record created successfully";
        } else {
            echo "Error executing statement: " . $conn->error;
        }

        $userStmt->close();
        $addressStmt->close();
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
    <title>Sign Up form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/login.css">

    <style>
        /* Modal Styles */
        .modal {
  display: block;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  max-width: 400px; /* Set a maximum width */
  width: 80%;
  text-align: center;
  position: relative; /* Added relative positioning */
}

.close {
  color: #aaaaaa;
  position: absolute;
  top: 10px; /* Adjust the top position as needed */
  right: 10px; /* Adjust the right position as needed */
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
}

#modalOkBtn {
  background-color: #4caf50;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Insert New User</h2>
                        <form action="signup.php" method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Create a Username" /
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="firstname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname" id="firstname" placeholder="Your First Name" /
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="lastname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="lastname" placeholder="Your Last Name" /
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" / required>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Your Phone number" / required>
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your Address" / required>
                            </div>
                            <div class="form-group">
                                <label for="postalcode"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="postalcode" id="postalcode" placeholder="Your Postal Code" / required>
                            </div>
                            <div class="form-group">
                                <label for="city"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="city" id="city" placeholder="Your City" / required>
                            </div>
                            <div class="form-group">
                                <label for="state"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="state" id="state" placeholder="Your State" / required>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" / required>
                            </div>
                            <span id="password-match" style="color: red;"></span>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="confirm your password" /
                                    required>
                                <span id="password-match-confirm" style="color: red;"></span>
                            </div>
                          
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                       
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
 <!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/login.js"></script>

<div id="myModal" class="modal" style="display: none;">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="closeModal(false)">&times;</span>
        <p>Registration successful! <br>Click OK to close.</p>
        <button id="modalOkBtn" onclick="closeModal(true)">OK</button>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#register-form').submit(function (event) {
            event.preventDefault();

            // Your existing form submission logic here
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'signup.php',
                data: formData,
                success: function (response) {
                    // Display the modal on successful form submission
                    $('#myModal').css('display', 'block');
                    // You may also handle other response messages if needed
                },
                error: function (error) {
                    console.error('Form submission error:', error);
                    // Handle errors or display appropriate messages
                }
            });
        });

        // Function to close the modal and optionally redirect
        function closeModal(isOkButton) {
            $('#myModal').css('display', 'none');
            if (isOkButton) {
                window.location.href = 'signin.php';
            }
        }

        // When the user clicks outside the modal, close it
        window.onclick = function (event) {
            if (event.target === document.getElementById('myModal')) {
                closeModal(true);
            }
        };

        // Event listener for the close button (&times;)
        document.getElementsByClassName('close')[0].onclick = function () {
            closeModal(true);
        };

        // Event listener for the OK button
        document.getElementById('modalOkBtn').onclick = function () {
            closeModal(true);
        };
    });
</script>
    <script>
        $(document).ready(function () {
            $('#pass').on('keyup', function () {
                validatePassword();
            });

            $('#re_pass').on('keyup', function () {
                var confirmPassword = $('#re_pass').val();

                if (validatePassword() && $('#pass').val() == confirmPassword) {
                    $('#password-match-confirm').html('');
                } else {
                    $('#password-match-confirm').html('Passwords do not match');
                }
            });

            function validatePassword() {
                var password = $('#pass').val();
                var passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

                if (passwordRegex.test(password)) {
                    $('#password-match').html('');
                    return true;
                } else {
                    $('#password-match').html('Password must be 8 characters long with at least 1 special character, 1 number, and 1 capital letter.');
                    return false;
                }
            }
        });
    </script>
</body>

</html>