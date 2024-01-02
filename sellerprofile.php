<?php
session_start();
require 'config.php';

// Check if the seller is logged in
if (isset($_SESSION['seller_id'])) {
    $sellerId = $_SESSION['seller_id'];

    // Fetch seller details from the database using seller_id
    $sql = "SELECT * FROM seller WHERE seller_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $sellerId); // Assuming seller_id is an integer
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['seller_id'];
                $shopname = $row['shop_name'];
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                $city = $row['city'];
                $postalcode = $row['postal_code'];
                $state = $row['state'];
            }
        } else {
            echo "No seller found";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // If the update form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['update'])) {
            // Collect form data
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $postalcode = $_POST['postalcode'];
            $state = $_POST['state'];

            // Update seller details in the database using seller_id
            $updateQuery = "UPDATE seller SET firstname = ?, lastname = ?, email = ?, phone = ?, address = ?, city = ?, postal_code = ?, state = ? WHERE seller_id = ?";
            $stmtUpdate = $conn->prepare($updateQuery);

            if ($stmtUpdate) {
                $stmtUpdate->bind_param("ssssssssi", $fname, $lname, $email, $phone, $address, $city, $postalcode, $state, $sellerId);
                $stmtUpdate->execute();

                // Check if the update was successful
                if ($stmtUpdate->affected_rows > 0) {
                    echo "Seller details updated successfully";
                    // You may redirect or display a success message here
                } else {
                    echo "No changes were made";
                }

                $stmtUpdate->close();
            } else {
                echo "Error updating seller details: " . $conn->error;
            }
        }
    }

    // Close the database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">


  <title>UserProfile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      color: #1a202c;
      text-align: left;
      background-color: #e2e8f0;
      /* Replace 'your-image-url.jpg' with the actual URL of your background image */
      background-size: cover;
      /* Adjust to your preferred size, 'cover' will scale the image to cover the entire background */
      background-repeat: no-repeat;
      /* Prevent image repetition */
    }

    .main-body {
      padding: 15px;
    }

    .card {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, .125);
      border-radius: .25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
      padding-right: 8px;
      padding-left: 8px;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }

    .h-100 {
      height: 100% !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }
  </style>


  <style>
    /* Default link color when idle (blue) */
    .btn.btn-outline-primary a {
      color: blue;
      text-decoration: none;
      /* Remove underline for the link */
    }

    /* Link color when hovered (white) */
    .btn.btn-outline-primary a:hover {
      color: white;
    }
  </style>


  <style>
    .transition-container {
      overflow: hidden;
      position: relative;
    }

    .main-body,
    #profileEditForm {
      transition: transform 0.3s;
    }

    .edit-form-visible .main-body {
      transform: translateX(-100%);
    }

    .edit-form-visible #profileEditForm {
      transform: translateX(0);
    }

    /* Add your custom animation styles here */
    /* Example: */
    .slide-in {
      animation: slideIn 0.3s ease-in-out;
    }

    @keyframes slideIn {
      from {
        transform: translateX(-100%);
      }

      to {
        transform: translateX(0);
      }
    }
  </style>

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
    #d {
      border: 1px solid #ccc;
      /* Optional: Add a border for visualization */
      padding: 20px;
      /* Add padding to create space inside the container */
    }

    h2 {
      margin-top: 10px;
      /* Add margin to the top of the heading to create space */
    }

    #p {
      color: black;
    }

    @keyframes truck {
      0% {
        transform: translateX(-100%);
      }

      100% {
        transform: translateX(52%);
      }
    }

    /* Apply the animation to the truck icon */
    .animated-truck {
      animation: truck 2s linear infinite alternate;
      /* 'alternate' makes the animation reverse direction */
    }


    @keyframes rotateRefresh {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    /* Apply the animation to the refresh icon */
    .animated-refresh {
      animation: rotateRefresh 4s linear infinite forwards;
    }


    @keyframes popHelp {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Define the keyframes for the help icon beat animation */
    @keyframes beatHelp {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }
    }

    /* Apply the animations to the help icon */
    .animated-help {
      animation: popHelp 2s ease-in-out infinite, beatHelp 2s linear infinite alternate;
    }


    /* Style for the play button */
    .play-button {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100px;
      height: 100px;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-decoration: none;
      color: #fff;
      transition: background-color popPlay 0.3s ease-in-out;
    }

    .play-button:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    /* Style for the play icon */
    .fa-play {
      font-size: 40px;
      z-index: 1;
    }

    /* Center the play icon within the button */
    .play-button .fa-play {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;

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

    /* Initially hide all team members */
    .block {
      opacity: 0;
      transform: translateX(-100%);
      /* Change translateX to translateY */
      transition: opacity 0.5s ease, transform 1s ease;
    }

    /* Animate each team member with a delay */
    .block:nth-child(1) {
      animation: slideInFromLeft 2s ease 3s forwards;
      /* Change animation */
    }

    .block:nth-child(2) {
      animation: slideInFromLeft 2s ease 2s forwards;
      /* Change animation and delay */
    }

    .block:nth-child(3) {
      animation: slideInFromLeft 2s ease 1s forwards;
      /* Change animation and delay */
    }

    /* Define the slide-in animation keyframes */
    @keyframes slideInFromLeft {
      0% {
        opacity: 0;
        transform: translateX(-100%);
      }

      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Apply the animation to the element */
    .slide-in {
      animation-name: slideInFromLeft;
      animation-duration: 0.8s;
      /* Adjust the duration to control the speed (e.g., 1s for a slow slide) */
      animation-timing-function: ease-in-out;
      /* Use ease-in-out for a smooth start and end */
      animation-fill-mode: both;
      /* Keeps the final state of the animation after it ends */
      display: block;
      /* Show the element */
    }

    /* Apply styles to the image */
    .block-38-header img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      transform: scale(1);
      /* Initially at the normal scale */
      transition: transform 0.3s;
      /* Add a smooth transition */
    }

    /* Apply styles to the containing <div> */
    .block-38-header:hover img {
      transform: scale(1.4);
      /* Scale up the image slightly on hover */


    }

    .rounded-image {
      border-radius: 20px;
    }


    .rounded-circle {
      border: 3px solid #000;
      /* You can adjust the border width and color as needed */
    }

    #e {
      color: #000;
      text-decoration: none;
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

            <div class="col-1 col-md-4 order-3 order-md-3 text-right" style="padding-right: 30px;">
              <div class="site-top-icons">
                <ul>
                 

                  <li>
                    <a href="cart.html" class="site-cart btn btn-sm custom-button">
                      <span class="icon icon-shopping_cart"><i class="fas"></i></span> Cart
                      <span class="count">2</span>
                    </a>
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>Profile</div>
        </div>
      </div>
    </div>
  </div>


  <div class="main-body">
    <div class="container">

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card align-items-top">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                  width="150">
                <div class="mt-3">
                  <h4>
                    <?php echo $shopname ?>
                  </h4>
                  <p class="text-muted font-size-sm"><?php echo $address ?></p>
                  <button class="btn btn-outline-primary"><a href="signout.php">Logout</a></button>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-3">
            <ul class="list-group list-group-flush" id="y">
              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-package">
                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                    <path
                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg>
                  <a href="profile-order.html" id="e">SOLD ITEMS</a>
                </h6>
                <span class="text-secondary"></span>
              </li>


            </ul>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">First Name</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $fname ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Last Name</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $lname ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $email ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone Number</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $phone ?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $address?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Postal Code</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $postalcode?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">City</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $city?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">State</h6>
                </div>
                <div class="row-sm-9 text-secondary">
                  <?php echo $state?>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " id="editProfileButton" href="#">Edit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  </script>
  <!-- Create your profile edit form here -->
  <div id="profileEditForm" class="slide-in" style="display: none; padding-top: 50px;">
    <form method="post" enctype="multipart/form-data" class="row justify-content-center">
      <div class="col-md-6"> <!-- Center the form in a column (adjust the column width as needed) -->
        <div class="form-group">
          <label for="firstname" style="color: #7971ea;">First Name</label>
          <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $fname ?>">
        </div>
        <div class="form-group">
          <label for="lastname" style="color: #7971ea;">Last Name</label>
          <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lname ?>">
        </div>
        <div class="form-group">
          <label for="email" style="color: #7971ea;">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
          <label for="phone" style="color: #7971ea;">Phone Number</label>
          <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
        </div>
        <div class="form-group">
          <label for="address" style="color: #7971ea;">Address</label>
          <input type="textarea" class="form-control" id="address" name="address" value="<?php echo $address?>">
        </div>
        <div class="form-group">
          <label for="postalcode" style="color: #7971ea;">Postal Code</label>
          <input type="text" class="form-control" id="postalcode" name="postalcode" value="<?php echo $postalcode ?>">
        </div>
        <div class="form-group">
          <label for="city" style="color: #7971ea;">City</label>
          <input type="text" class="form-control" id="city" name="city" value="<?php echo $city ?>">
        </div>
        <div class="form-group">
          <label for="phone" style="color: #7971ea;">State</label>
          <input type="text" class="form-control" id="state" name="state" value="<?php echo $state ?>">
        </div>
        <button type="submit" class="btn btn-outline" name="update" style="background-color: #7971ea; color: white;">Update</button>
      </div>
    </form>
  </div>

  </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  </script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>


  <script>
    document.querySelectorAll('a[href^="#TheTeam"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

  <script>
    document.querySelectorAll('a[href^="#i"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

  <script>
    document.querySelectorAll('a[href^="#cat"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>


  <script>
    // Toggle visibility of the profile edit form
    const editProfileButton = document.getElementById('editProfileButton');
    const profileEditForm = document.getElementById('profileEditForm');
    const cancelEditButton = document.getElementById('cancelEditButton');

    editProfileButton.addEventListener('click', () => {
      // Hide the entire main-body content
      document.querySelector('.main-body').style.display = 'none';
      // Show the profile edit form
      profileEditForm.style.display = 'block';
    });

    cancelEditButton.addEventListener('click', () => {
      // Show the main-body content
      document.querySelector('.main-body').style.display = 'block';
      // Hide the profile edit form
      profileEditForm.style.display = 'none';
    });

    // Handle form submission to save changes (You need to implement this part)
    const editForm = document.getElementById('editForm');
    editForm.addEventListener('submit', (event) => {
      event.preventDefault();
    });
  </script>

</body>

</html>