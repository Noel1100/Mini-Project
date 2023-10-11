<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Electro-KART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
      /* CSS styles for the heading */
      #i{
          font-family: Arial, sans-serif;
          font-size: 36px;
          color: black; /* Blue color, you can change this to your preferred color */
          text-align: center;
          text-shadow: 2px 2px 4px rgb(228, 227, 227); /* Add a subtle text shadow */
          margin-bottom: 10px;
      }
  </style>
    
    <style>
      #d {
          border: 1px solid #ccc; /* Optional: Add a border for visualization */
          padding: 20px; /* Add padding to create space inside the container */
      }

      h2 {
          margin-top: 10px; /* Add margin to the top of the heading to create space */
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
  max-width: 15%; /* Make the image responsive */
  height: auto; /* Automatically adjust the image height */
  display: inline-block;
  vertical-align: middle; /* Align the image vertically with the text */
}

  </style>
  </head>

  <body>

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="index.html" class="js-logo-clone">
                  <img src="images/kart.jpg" alt="Electro-KART" class="logo-image">
                  <span class="logo-text">Electro-Kart</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<h1>ADMIN DASHBOARD</h1>

<button><a href="" class="btn btn-outline-success">View products</a></button>
<button><a href="" class="btn btn-outline-success">Insert products</a></button>
<button><a href="" class="btn btn-outline-success">View categories</a></button>
<button><a href="" class="btn btn-outline-success">Insert categories</a></button>
<button><a href="" class="btn btn-outline-success">View brands</a></button>
<button><a href="" class="btn btn-outline-success">Insert brands</a></button>
<button><a href="" class="btn btn-outline-success">List users</a></button>
<button><a href="" class="btn btn-outline-success">All orders</a></button>
<button><a href="" class="btn btn-outline-success">All payments</a></button>

  </body>
  
</html>