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

    // Check for empty fields
    if (empty($shopname) || empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($password) || empty($confirm_password) || empty($address) || empty($city) || empty($district)|| empty($postalcode) || empty($state)) {
        echo "All fields are required.";
    } else {
        // Insert user data into 'users' table
        $sellerSql = "INSERT INTO seller (shop_name, firstname, lastname, email, phone, password, address, city, state, district, postal_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $sellerStmt = $conn->prepare($sellerSql);
        $sellerStmt->bind_param("sssssssssss", $shopname, $fname, $lname, $email, $phone, $password, $address, $city, $state, $district ,$postalcode);
        $sellerResult = $sellerStmt->execute();

        if ($sellerResult) {
            echo "Record created successfully";
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
    /* CSS styles for the heading */
    #i {
      font-family: Arial, sans-serif;
      font-size: 36px;
      color: black;
      /* Blue color, you can change this to your preferred color */
      text-align: center;
      text-shadow: 2px 2px 4px rgb(228, 227, 227);
      /* Add a subtle text shadow */
      margin-bottom: 10px;
    }
  </style>
  <style>
    .content-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 100%;
      /* Set the maximum width of the container */
      margin: 0 auto;
      /* Center the container horizontally */
    }

    .col-sm-6 {
      flex: 0 0 calc(33.33% - 20px);
      /* Equal width for each column (adjust margin as needed) */
      margin-right: 20px;
      /* Add margin for spacing */
      box-sizing: border-box;
      /* Include padding and border in the width calculation */
    }

    @media (max-width: 992px) {
      .col-sm-6 {
        flex: 0 0 calc(50% - 20px);
        /* Adjust column width for smaller screens (adjust margin as needed) */
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
      /* Optional: Add a border for visualization */
      padding: 20px;
      /* Add padding to create space inside the container */
    }

    h2 {
      margin-top: 10px;
      /* Add margin to the top of the heading to create space */
    }

    /* Add shade effect to all images inside the container */
    #cat .block-2-item::before {
      content: "";
      display: block;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.2);
      /* Adjust the opacity to control the shade */
      transition: background 0.3s ease;
    }

    /* Change the shade effect on hover */
    #cat .block-2-item:hover::before {
      background: rgba(0, 0, 0, 0);
      /* Change to transparent on hover */
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
      /* Adjust the scale value for the desired zoom level */
      z-index: 2;
      border-radius: 15px;
      /* Adjust the border-radius value for curved border when hovered */
    }

    .image-zoom-container:hover .image-zoom-overlay {
      opacity: 1;
      z-index: 1;
      transform: scale(1.05);
      /* Adjust the scale value to make the image pop */
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
      /* Make the image responsive */
      height: auto;
      /* Automatically adjust the image height */
      display: inline-block;
      vertical-align: middle;
      /* Align the image vertically with the text */
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
            justify-content: space-between; /* Align items horizontally */
        }

        .styles__KeyWrapper-o5uywd-4 {
            box-sizing: border-box;
            width: 100%; /* Set width to auto to adjust to content */
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
        border-radius: 10px; /* Set border radius to make corners rounded */
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
        border-radius: 8px; /* Set border radius for the input */
    }

    input[type="email"],
    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        box-sizing: border-box;
        border: 2px solid #7971ea;
        border-radius: 8px; /* Set border radius for the input */
    }
        .agree-term {
            /* Adjusted styles for the checkbox */
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

</head>
<body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left" style="padding-left: 50px;">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">
                  <img src="images/kart.jpg" alt="Electro-KART" class="logo-image">
                  <span class="logo-text">Electro-Kart</span>
                </a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right" style="padding-right: 50px;">
              <div class="site-top-icons">
                <ul>
                  <li>
                    <a href="signin.php" class="btn btn-sm custom-button">
                      <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i></span>Sell Online
                    </a>
                  </li>

                  <li>
                  <?php
                    if (isset($_SESSION['username'])) {
                      echo '<a href="userprofile.php" class="btn btn-sm custom-button">
                                  <span class="icon"><i class="fas fa-user"></i></span>' . $_SESSION['username'] .
                        '</a>';
                      $_SESSION['login'] = true;
                    } elseif (isset($_SESSION['seller_id'])) {
                        echo '<a href="sellerprofile.php" class="btn btn-sm custom-button">
                                    <span class="icon"><i class="fas fa-user"></i></span>' . $_SESSION['firstname'] .
                          '</a>';
                      }
                    else {
                      echo '<a href="signin.php" class="btn btn-sm custom-button">
                                  <span class="icon"><i class="fas fa-sign-in-alt"></i></span> Login
                              </a>';
                    }
                    ?>
                  </li>

                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="">
              <a href="index.php">Home</a>
            </li>
            <li class="">
              <a href="about.html">About</a>
            </li>
            <li class="">
              <a href="shop.php">Shop</a>
            </li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
  <div class="styles__KpiContainer-o5uywd-0">
    <ul class="styles__KpiList-o5uywd-3">
        <li class="styles__KeyWrapper-o5uywd-4">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/crore_users_revamp.svg" alt="50 Crore users icon" class="styles__KeyImage-o5uywd-6">
            <div class="styles__KeyHeader-o5uywd-1">Trusted by many Sellers /<br>Customers</div>
        </li>

        <li class="styles__KeyWrapper-o5uywd-4">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/wallet-icon.svg" alt="7* days secure &amp; regular payments icon" class="styles__KeyImage-o5uywd-6">
            <div class="styles__KeyHeader-o5uywd-1">7* days secure &amp; <br>regular payments</div>
        </li>

        <li class="styles__KeyWrapper-o5uywd-4">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/low-cost-icon.svg" alt="Low cost of doing business icon" class="styles__KeyImage-o5uywd-6">
            <div class="styles__KeyHeader-o5uywd-1">Low cost<br> of doing business</div>
        </li>

        <li class="styles__KeyWrapper-o5uywd-4">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/seller-support-icon.svg" alt="One click Seller Support icon" class="styles__KeyImage-o5uywd-6">
            <div class="styles__KeyHeader-o5uywd-1">One click <br>Seller Support</div>
        </li>

        <li class="styles__KeyWrapper-o5uywd-4">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/shopping-bag-icon.svg" alt="Access to The Big Billion Days &amp; more icon" class="styles__KeyImage-o5uywd-6">
            <div class="styles__KeyHeader-o5uywd-1">Access to Exclusive items<br> &amp; more</div>
        </li>
    </ul>
</div>

<div id="createAccount" class="styles__ContentContainer-a5s7uc-2 eRDGwz">
  <div class="style__ContentHeader-sc-1c43xqv-6 hJmdef">
    <h2 class="styles__H2-a90kxg-5 style__H2TextWrapper-sc-1c43xqv-1 iANvci" style="color:#7971ea">Create Account</h2>
    <div class="style__NavIndicator-sc-1c43xqv-7 gxStbM"></div>
  </div>
  <div class="styles__StepsFlex-a5s7uc-12 jxcCkk">
    <div class="styles__DividerContainer-a5s7uc-9 gaPJoO">
      <div class="styles__RightContainer-a5s7uc-4 iMXeuI">
        <div class="styles__Container-a5s7uc-5 bOSNXD">
          <div class="styles__ContentParaContainer-a5s7uc-7 leFggZ">
            <p>Creating your Electro-Kart seller account is a quick process, taking less than 10 minutes, and requires only 3 documents. Follow the checklist to ensure a seamless account creation experience. By having these documents ready, you can streamline the account creation process and get started on Electro-Kart as an online seller in no time.</p>
          </div>
          <div class="styles__ContentListContainer-a5s7uc-8 bejgle">
            <ul></ul>
          </div>
        </div>
     
        <div class="styles__BreakContent-a5s7uc-1 jMrvgN"></div>
        
        <div class="main">
          <!-- Sign up form -->
          <section class="seller">
              <div class="container">
                  <div class="seller-content">
                      <div class="seller-form">
                          <form method="POST" class="register-form" id="register-form">
                              <div class="form-group">
                                  <label for="shopname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                  <input type="text" name="shopname" id="shopname" placeholder="Your shop Name" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="firstname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                  <input type="text" name="firstname" id="firstname" placeholder="Your First Name" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="lastname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                  <input type="text" name="lastname" id="lastname" placeholder="Your Last Name" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                                  <input type="email" name="email" id="email" placeholder="Your Email" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                  <input type="text" name="phone" id="phone" placeholder="Your Phone number" required>
                              </div>
                              <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="address" placeholder="Enter your Shop address" required>
                            </div>
                            <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="city"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="text" name="city" id="city" placeholder="Your City" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="district"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="text" name="district" id="district" placeholder="Your District" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="state"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="text" name="state" id="state" placeholder="Your State" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="postalcode"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="text" name="postalcode" id="postalcode" placeholder="Your Postal Code" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="password" name="pass" id="pass" placeholder="Create your password" required>
                              </div>
                              <div class="form-group-half" style="padding-left: 20px;">
                                  <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                                  <input type="password" name="re_pass" id="re_pass" placeholder="Confirm your password" required>
                              </div>
                              <div class="form-group">
                                <label for="gst"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="gstnumber" id="gstnumber" placeholder="Enter GST Number" required>
                            </div>
                              <span id="password-match" style="color: red;"></span>
                              <div class="form-group">
                                  <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                  <label for="agree-term" class="label-agree-term">I agree to all
                                      statements in <a href="#" class="term-service">Terms of service</a></label>
                              </div>
                              <div class="form-group form-button">
                                  <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                              </div>
                          </form>
                      </div>
                      <div class="signup-image">
                          <a href="signin.php" class="signup-image-link">Already have an account?</a>
                      </div>
                  </div>
              </div>
          </section>
      </div>


      </div>
      <div class="styles__LeftContainer-a5s7uc-10 dMDvBv">
        <div class="styles__Container-a5s7uc-5 bOSNXD">
          <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/prelogin/images/Desktop_2_sell.webp" class="styles__Image-s6u1yz-6 eOqlUD">
        </div>

      </div>
    </div>
  </div>
  <div class="styles__StepsFlex-a5s7uc-12 jxcCkk">
    <div type="content-box" class="styles__Content-a5s7uc-13 ccYbZL">
      <h4 class="styles__H4-a90kxg-4 styles__H4TextWrapper-a5s7uc-31 iJCgIp" style="color:#7971ea">Don’t have a GSTIN?</h4>
      <p class="styles__ParaTextWrapper-a5s7uc-33 iSVwyd">Follow the steps below to generate for your online business.</p>
      <div id="container">
        <div class="box styles__Item-a5s7uc-15 cswvlQ">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/revamp-user.svg">
            <span class="styles__SpanWrap-a5s7uc-16 dTSKYW">Register / Login to <a href="https://www.gst.gov.in/">www.gst.gov.in</a></span>
        </div>

        <div class="box styles__Item-a5s7uc-15 cswvlQ">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/prelogin/icons/FileSvg.svg">
            <span class="styles__SpanWrap-a5s7uc-16 dTSKYW">Fill in the GST Enrolment Application Form</span>
        </div>

        <div class="box styles__Item-a5s7uc-15 cswvlQ">
            <img src="https://static-assets-web.flixcart.com/fk-sp-static/images/prelogin/icons/Files.svg">
            <span class="styles__SpanWrap-a5s7uc-16 dTSKYW">Submit Enrolment Application</span>
        </div>
    </div>
      </div>
    </div>
    <p style="font-size: 16px; font-weight: 300;" class="styles__ParaTextWrapper-a5s7uc-33 iHzMpX">
      Electro-Kart offers a diverse range of over 10+ categories where you can sell your products. These categories represent just a fraction of the wide variety available on Electro-Kart, providing ample opportunities for sellers to showcase their products to a large customer base.
    </p>
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

         <!-- JS -->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="js/login.js"></script>
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

