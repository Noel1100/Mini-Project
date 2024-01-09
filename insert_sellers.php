<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $shopname = $_POST['shopname'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['re_pass'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $postalcode = $_POST['postalcode'];
    $gst = $_POST['gstnumber'];

    if (empty($shopname) || empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($confirm_password) 
    || empty($address) || empty($city) || empty($district) || empty($postalcode) || empty($state) || empty($gst)) {
        echo "All fields are required.";
    } else {
        $sellerSql = "INSERT INTO seller (shop_name, firstname, lastname, email, phone, password, address, city, state, district, postal_code, gst) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sellerStmt = $conn->prepare($sellerSql);
        $sellerStmt->bind_param("ssssssssssss", $shopname, $fname, $lname, $email, $phone, $password, $address, $city, $state, $district ,$postalcode ,$gst);
        $sellerResult = $sellerStmt->execute();

        if ($sellerResult) {
          echo '<script>
                  alert("Record created successfully");
                  window.location.href = "signin.php";
                </script>';
      } else {
          echo "Error executing statement: " . $conn->error;
      }
  
      $sellerStmt->close();
  }
}
  $conn->close();
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electro-KART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
    #i {
        font-family: Arial, sans-serif;
        font-size: 36px;
        color: black;
        text-align: center;
        text-shadow: 2px 2px 4px rgb(228, 227, 227);
        margin-bottom: 10px;
    }
    </style>
    <style>
    .content-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 100%;
        margin: 0 auto;
    }

    .col-sm-6 {
        flex: 0 0 calc(33.33% - 20px);
        margin-right: 20px;
        box-sizing: border-box;
    }

    @media (max-width: 992px) {
        .col-sm-6 {
            flex: 0 0 calc(50% - 20px);
        }
    }

    .block-4 {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .block-4-text {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }


    #1 {
        border: 1px solid #ccc;
        padding: 20px;
    }

    h2 {
        margin-top: 10px;
    }

    #cat .block-2-item::before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.2);
        transition: background 0.3s ease;
    }

    #cat .block-2-item:hover::before {
        background: rgba(0, 0, 0, 0);
    }
    </style>
    <style>
    .image-zoom-container {
        position: relative;
        overflow: hidden;
    }

    .image-zoom {
        transition: transform 0.5s ease;
    }

    .image-zoom-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .image-zoom-container:hover .image-zoom {
        transform: scale(1.2);
        z-index: 2;
        border-radius: 15px;
    }

    .image-zoom-container:hover .image-zoom-overlay {
        opacity: 1;
        z-index: 1;
        transform: scale(1.05);
    }

    .custom-button {
        padding: 10px 20px;
        margin-right: 10px;
        display: inline-flex;
        align-items: center;
        background-color: aliceblue;
        outline: none;
        border: none;

    }

    .custom-button .icon {
        margin-right: 10px;
    }

    .site-navbar {
        background-color: aliceblue;
    }

    .site-logo {
        position: relative;
        overflow: hidden;
    }

    .js-logo-clone {
        display: inline-block;
        font-size: 2rem;
        position: relative;
        overflow: hidden;
        color: transparent;
        transition: width 1s ease, opacity 1s ease;
        width: 0;
        white-space: nowrap;
        animation: revealText 2s ease forwards;
    }

    @keyframes revealText {
        0% {
            width: 0;
        }

        100% {
            width: 80%;
        }
    }

    .logo-image {
        max-width: 15%;
        height: auto;
        display: inline-block;
        vertical-align: middle;
    }
    </style>



    <style>
    .styles__KpiContainer-o5uywd-0 {
        border: 1px solid #ddd;

        margin: 20px;

    }

    .styles__KpiList-o5uywd-3 {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .styles__KeyWrapper-o5uywd-4 {
        box-sizing: border-box;
        width: 100%;
        max-width: 250px;
        margin: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-right: 1px solid #ddd;
        padding: 10px;
    }

    .styles__KeyImage-o5uywd-6 {
        margin-bottom: 10px;
    }

    .styles__KeyHeader-o5uywd-1 {
        color: #333;
        font-weight: bold;
        text-align: center;
    }
    </style>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        background-color: #f8f9fa;
        color: #495057;
    }

    .styles__ContentContainer-a5s7uc-2 {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin: 20px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .style__ContentHeader-sc-1c43xqv-6 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .style__H2-a90kxg-5 {
        color: #007bff;
    }

    .styles__DividerContainer-a5s7uc-9 {
        display: flex;
        justify-content: space-between;
    }

    .styles__RightContainer-a5s7uc-4 {
        flex: 1;
        margin-right: 20px;
    }

    .styles__Container-a5s7uc-5 {
        margin-bottom: 20px;
    }

    .styles__ContentParaContainer-a5s7uc-7 {
        margin-bottom: 10px;
    }

    .styles__Image-s6u1yz-6 {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .styles__StepsFlex-a5s7uc-12 {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .styles__StepsFlex-a5s7uc-12.jxcCkk {
        margin-top: 20px;
    }

    .styles__Content-a5s7uc-13 {
        flex: 1;
        margin-right: 20px;
    }

    .styles__H4-a90kxg-4 {
        color: #007bff;
    }

    .styles__ParaTextWrapper-a5s7uc-33 {
        margin-bottom: 20px;
    }

    .styles__SubContainer-a5s7uc-14 {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .styles__Item-a5s7uc-15 {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .styles__SpanWrap-a5s7uc-16 {
        flex: 1;
        color: #495057;
    }

    .styles__CatagoriesList-a5s7uc-17 {
        margin-top: 20px;
    }

    .sub-list-header {
        font-weight: bold;
        color: #007bff;
    }

    .styles__ListItems-a5s7uc-18 {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .styles__ListItems-a5s7uc-18 a {
        background-color: #007bff;
        color: #fff;
        padding: 8px 12px;
        border-radius: 4px;
        text-decoration: none;
    }

    .styles__ListItems-a5s7uc-18 a:hover {
        background-color: #0056b3;
    }
    </style>
    <style>
    #container {
        display: flex;
        flex-direction: row;
    }

    .box {
        margin: 10px;
        padding: 15px;
        border: 1px solid #180288;
        border-radius: 10px;
        display: flex;
        align-items: center;
    }

    .box img {
        max-width: 50px;
        max-height: 50px;
        margin-right: 10px;
    }

    .box span {
        font-size: 1.2em;
    }
    </style>
    <style>
    .main {
        margin-left: 20px;
    }

    .signup-content {
        background: #fff;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 600px;
        margin: auto;
        text-align: left;
        border-radius: 10px;
        border: 2px solid #3498db;
    }

    .form-group-half {
        width: 48%;
        display: inline-block;
        margin-bottom: 20px;
        border-radius: 10px;
    }

    input {
        width: calc(100% - 20px);
        padding: 10px;
        box-sizing: border-box;
    }

    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #7971ea;
        border-radius: 8px;
    }

    input[type="email"],
    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #7971ea;
        border-radius: 8px;
    }

    .agree-term {
        width: auto;
        margin-right: 5px;
    }

    .label-agree-term {
        display: inline-block;
        margin-top: 5px;
    }

    .form-button {
        display: block;
    }

    .signup-image {
        margin-top: 20px;
    }

    .signup-image-link {
        display: block;
        margin-top: 20px;
        color: #333;
        text-decoration: none;
    }

    .form-submit {
        background-color: #7971ea;
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
    }
    </style>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        background-color: #7971ea;
        color: #495057;
    }

    #createAccount {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin: 20px auto;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .seller {
        padding-left: 0;
    }

    .seller-content {
        text-align: center;
    }

    .seller-form {
        display: inline-block;
        text-align: left;
    }
    </style>

</head>

<body>
    <div>

        <div id="createAccount" class="styles__ContentContainer-a5s7uc-2 eRDGwz" style="padding-top: 80px; ">
            <div class="style__ContentHeader-sc-1c43xqv-6 hJmdef">


                <div class="main">
                    <section class="seller" style="padding-left: 120px;">
                        <div class="container">
                            <div class="seller-content">
                                <div class="seller-form">
                                    <form method="POST" class="register-form" id="register-form">
                                        <div class="form-group">
                                            <label for="shopname"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="shopname" id="shopname" placeholder="Shop Name"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="firstname"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="firstname" id="firstname" placeholder="First Name"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="lastname"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="lastname" id="lastname" placeholder="Last Name"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="email" placeholder="Email" required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                            <input type="text" name="phone" id="phone" placeholder="Phone number"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="address"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="address" id="address" placeholder="Shop address"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="city"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="text" name="city" id="city" placeholder="City" required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="district"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="text" name="district" id="district" placeholder="District"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="state"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="text" name="state" id="state" placeholder="State" required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="postalcode"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="text" name="postalcode" id="postalcode"
                                                placeholder="Postal Code" required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="pass" id="pass" placeholder="Create password"
                                                required>
                                        </div>
                                        <div class="form-group-half" style="padding-left: 20px;">
                                            <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                                            <input type="password" name="re_pass" id="re_pass"
                                                placeholder="Confirm password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="gst"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="gstnumber" id="gstnumber"
                                                placeholder="Enter GST Number" required>
                                        </div>
                                        <span id="password-match" style="color: red;"></span>

                                        <div class="form-group form-button">
                                            <input type="submit" name="signup" id="signup" class="form-submit"
                                                value="Register" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/login.js"></script>
    <script>
    $(document).ready(function() {
        $('#pass').on('keyup', function() {
            validatePassword();
        });

        $('#re_pass').on('keyup', function() {
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
                $('#password-match').html(
                    'Password must be 8 characters long with at least 1 special character, 1 number, and 1 capital letter.'
                    );
                return false;
            }
        }
    });
    </script>

</body>

</html>