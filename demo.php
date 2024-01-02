<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
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

    @keyframes slideInFromLeft {
      to {
        opacity: 1;
        transform: translateX(0);
        /* Change translateX to translateY */
      }
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

            <div class="col-6 col-md-4 order-3 order-md-3 text-right" style="padding-right: 20px; padding-top: 20px">
              <div class="site-top-icons">
              <ul>
    <?php
    if (isset($_SESSION['username'])) {
        // User is logged in as a regular user
        echo '<li><a href="userprofile.php" class="btn btn-sm custom-button">
                    <span class="icon"><i class="fas fa-user"></i></span>' . $_SESSION['username'] .
            '</a></li>';
        $_SESSION['login'] = true;
    } elseif (isset($_SESSION['seller_id'])) {
        // User is logged in as a seller
        echo '<li><a href="sellerprofile.php" class="btn btn-sm custom-button">
                    <span class="icon"><i class="fas fa-user"></i></span>' . $_SESSION['firstname'] .
            '</a></li>';
    } else {
        // User is not logged in
        echo '<li><a href="seller.php" class="btn btn-sm custom-button">
                    <span class="icon"><i class="fas fa-solid fa-store"></i></span>Become a Seller
                </a></li>';
        echo '<li><a href="signin.php" class="btn btn-sm custom-button">
                    <span class="icon"><i class="fas fa-sign-in-alt"></i></span> Login
                </a></li>';
    }
    ?>

    <li>
        <a href="cart.php" class="site-cart btn btn-sm custom-button">
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
              <a href="about.php">About</a>
            </li>
            <li class="">
              <a href="shop.php">Shop</a>
            </li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

 <!-- HEADER DESKTOP-->

  

            <!-- MAIN CONTENT-->
            <div class="content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="overview-wrap">
                                    <h2 class=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 384 384">
                                        <path fill="currentColor" d="M0 213V0h171v213zm0 171V256h171v128zm213 0V171h171v213zm0-384h171v128H213z"/></svg>Overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25" style="justify-content: center;">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner"><a href="list-products.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 432 384">
                                                    <path fill="currentColor" d="M0 363v-86h427v86zm43-64v42h42v-42zM0 21h427v86H0zm85 64V43H43v42zM0 235v-86h427v86zm43-64v42h42v-42z"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>View Products</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner"><a href="insert_items.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 432 456">
                                                    <path fill="currentColor" d="M213 176v-64h-64V69h64V5h43v64h64v43h-64v64zm-85 192q18 0 30.5 12.5t12.5 30t-12.5 30T128 453t-30-12.5t-12-30t12-30t30-12.5m213.5 0q17.5 0 30 12.5t12.5 30t-12.5 30t-30 12.5t-30-12.5t-12.5-30t12.5-30t30-12.5M132 299q0 5 5 5h247v43H128q-18 0-30.5-12.5T85 304q0-11 6-20l28-53L43 69H0V27h70l20 42l20 43l48 101l3 6h149l59-107l24-43l37 21l-82 149q-12 22-38 22H151l-19 35z"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>Insert Products</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner"><a href="view_products.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 384 432">
                                                    <path fill="currentColor" d="M341 45q18 0 30.5 12.5T384 88v299q0 17-12.5 29.5T341 429H43q-18 0-30.5-12.5T0 387V88q0-18 12.5-30.5T43 45h89q7-19 23.5-30.5T192 3t36.5 11.5T252 45zm-149 0q-9 0-15 6.5t-6 15t6 15t15 6.5t15-6.5t6-15t-6-15t-15-6.5m43 299v-43H85v43zm64-85v-43H85v43zm0-86v-42H85v42z"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>View Categories</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner"><a href="all_orders.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 432 432">
                                                    <path fill="currentColor" d="M128 344q18 0 30.5 12.5t12.5 30t-12.5 30T128 429t-30-12.5t-12-30t12-30t30-12.5M0 3h70l20 42h315q9 0 15.5 6.5T427 67q0 5-3 10l-76 138q-12 22-38 22H151l-19 35v3q0 5 5 5h247v43H128q-18 0-30.5-12.5T85 280q0-11 6-20l28-53L43 45H0zm341.5 341q17.5 0 30 12.5t12.5 30t-12.5 30t-30 12.5t-30-12.5t-12.5-30t12.5-30t30-12.5"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>All Orders</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner"><a href="list-user.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 472 384">
                                                    <path fill="currentColor" d="M320 171q-27 0-45.5-19T256 106.5t18.5-45T320 43t45.5 18.5t18.5 45t-18.5 45.5t-45.5 19m-170.5 0q-26.5 0-45.5-19t-19-45.5t19-45T149.5 43t45 18.5t18.5 45t-18.5 45.5t-45 19m0 42q27.5 0 60.5 8t61 26t28 41v53H0v-53q0-23 27.5-41t61-26t61-8m170.5 0q28 0 61 8t60.5 26t27.5 41v53H341v-53q0-43-42-74q13-1 21-1"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>List of Users</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner"><a href="list-seller.php">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="82" height="82" viewBox="0 0 384 384">
                                                    <path fill="currentColor" d="M363 21v43H21V21zm21 214h-21v128h-43V235h-85v128H21V235H0v-43L21 85h342l21 107zm-192 85v-85H64v85z"/></svg></i>
                                            </div><br>
                                            <div class="text">
                                                <span>List of Sellers</span>
                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 November, 2023</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Today.....</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task </a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting </a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task </a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting </a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task </a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
