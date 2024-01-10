<?php
session_start();
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
    }
  </style>
  <style>
    #p {
      width: 300px;
      margin: 0 10px;
      box-shadow: 0 0 20px 2px rgba(0, 0, 0, 0.1);
      transition: 0.2s;
      height: 400px;
    }

    #p img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
      border-radius: 4px;
    }

    #p:hover {
      transform: scale(1.20);
      z-index: 1.5;
    }

    #l {
      color: black;
    }

    #x {
      box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
    }
  </style>
  <style>
    #d {
      border: 1px solid #ccc;
      padding: 20px;
    }

    h2 {
      margin-top: 10px;
    }

    #z {
      background-color: rgba(60, 85, 140, 0.7);
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
      text-align: center;
      align-items: center;
    }


    #z1 {
      background-color: rgba(60, 85, 140, 0.7);
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
      text-align: center;
      align-items: center;
    }

    #z1:hover {
      transform: scale(1.10);
      transition: transform 0.3s ease-in-out;
    }

    #z1 {
      transition: transform 0.3s ease-in-out;
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .comment-box {
      position: absolute;
      background-color: rgba(0, 0, 255, 0.1);
      border: 1px solid #ffffff;
      padding: 5px 10px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      opacity: 1;
      transition: opacity 1s;
      z-index: 1;
    }

    #login-icon {
      position: relative;
      color: blue;
    }

    #login-comment p {
      margin: 0;
    }

    #login-icon.clicked #login-comment {
      opacity: 0;
    }
  </style>
  <style>
    .slideshow-container {

      position: relative;
      margin: auto;
      overflow: hidden;
    }

    .slide {
      display: none;
      animation: fade 2s ease-in-out infinite;
    }

    img {
      width: 100%;
      height: 200px;
    }

    @keyframes fade {

      0%,
      100% {
        opacity: 0;
      }

      50% {
        opacity: 1;
      }
    }

    .promo-image {
      width: auto;
      height: auto;
    }

    .container1 {
      position: relative;
      width: 1525px;
      height: 500px;
      overflow: hidden;
    }

    .container1 img {
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 1s;
    }

    .container1 img:first-child {
      opacity: 1;
    }

    .slider-arrows {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      list-style: none;
    }

    .slider-arrows .arrow {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .arrow {
      font-size: 36px;
      cursor: pointer;
      width: 0;
      height: 0;
      border-style: solid;
      display: inline-block;
      position: absolute;
      list-style: none;
    }

    #prev {
      position: absolute;
      color: blue;
      top: 50%;
      left: 0;
      transform: translateX(200%);
      cursor: pointer;
      z-index: 1;
      list-style-type: none;
    }

    #next {
      position: absolute;
      color: blue;
      top: 50%;
      right: 100;
      transform: translateX(30250%);
      cursor: pointer;
      z-index: 1;
      list-style-type: none;
    }

    .bullet-indicators {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
    }

    .bullet {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: rgb(182, 182, 182);
      margin: 0 5px;
      cursor: pointer;
    }

    .bullet.active {
      background: blue;
    }

    #imageSliderContainer {
      width: 500;
      border: 1px solid #000;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #imageSlider {
      display: inline-block;
      overflow: hidden;
    }

    #imageSlider img {
      vertical-align: middle;
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
            <li class="has-children active">
              <a href="index.php">Home</a>
              <ul class="dropdown">
                <li><a href="#fre">Featured Products</a></li>
                <li><a href="#com">Combo Offers</a></li>
                <li><a href="#big">Big Sale!</a></li>
              </ul>
            </li>
            <li class="">
              <a href="about.php">About</a>
            </li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container1" id="imageSlider">
        <img src="images/vivo1.png">
        <img src="images/asus1.png">
        <img src="images/lg_.png">
        <img src="images/iphone.png">
      </div>
      <div class="slider-arrows">
        <div class="arrow" id="prev">&#9664;</div>
        <div class="arrow" id="next">&#9654;</div>
      </div>
      <div class="bullet-indicators" id="bulletIndicators">
      </div>
    </div>


    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck animated-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Enjoy the perks of hassle-free shopping with our complimentary shipping, ensuring your orders reach you promptly without additional charges.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start animated-refresh">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Explore worry-free with our hassle-free, free returns policy - ensuring your satisfaction and confidence in every purchase. Shop confidently!</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start animated-help">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Dedicated and responsive customer support ensures your satisfaction. We're committed to resolving queries promptly and providing exceptional service.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center" id="fre">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <div id="i">
          <h2>Featured Products</h2>
        </div>
      </div>
      <div class="site-section site-blocks-2" id="cat">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="" id="x">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="images/refrigerator.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">New</span>
                  <h3>Home Appliances</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="images/geforce.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">New</span>
                  <h3>Computer Accessories</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="images/camera.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">New</span>
                  <h3>Camera</h3>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container" id="com">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Combo Offers</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center" id="p">
                  <figure class="block-4-image">
                    <img src="images/item1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html?item=1">Marshall Acton III 60W Bluetooth Speaker</a></h3>
                    <p class="mb-0" id="l">Marshall Acton III 60W Bluetooth Speaker price in India starts from ₹31,999.
                    </p>
                    <p class="text-primary font-weight-bold">M.R.P
                      ₹
                      31,999</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center" id="p">
                  <figure class="block-4-image">
                    <img src="images/marshall  headphone.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html?item=2">MOTIF II A.N.C.</a></h3>
                    <p class="mb-0" id="l">Motif II A.N.C. offers huge sound.Its sleek charging case by powering your
                      headphones with 30 hours of wireless playtime.</p>
                    <p class="text-primary font-weight-bold">M.R.P.
                      ₹
                      19,999.00</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center" id="p">
                  <figure class="block-4-image">
                    <img src="images/computer accesories.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html?item=3">TP-Link 16 Port</a></h3>
                    <p class="mb-0" id="l">TP-Link 16 Port Gigabit PoE Switch 8 PoE Port+ @150W Easy Smart Plug & Play
                      Sturdy Metal w/Shielded Ports Support QoS, Vlan, IGMP and Link Aggregation (TL-SG1016PE).</p>
                    <p class="text-primary font-weight-bold">M.R.P
                      ₹
                      9,999</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center" id="p">
                  <figure class="block-4-image">
                    <img src="images/phone.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html?item=4">Lava Blaze</a></h3>
                    <p class="mb-0" id="l">Buy the Lava Blaze 5G 128 GB (Glass Green, 8 GB RAM) and delve into a new
                      world of possibilities. The stylish and marvellous design of the phone attracts everyone. </p>
                    <p class="text-primary font-weight-bold">M.R.P
                      ₹
                      13,999</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center" id="p">
                  <figure class="block-4-image">
                    <img src="images/inverter.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">JUMBO HOME UPS </a></h3>
                    <p class="mb-0" id="l">DSP/ HIGH-END MICRO CONTROLLER BASED JUMBO UPS Model are designed using
                      latest State-of-the-art Technology for Optimum Performance and Higher Reliability.</p>
                    <p class="text-primary font-weight-bold">M.R.P
                      ₹
                      18360</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container" id="big">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2><a href="shop.php" style="color: black;">Big Sale!</a></h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="bigsale.html"><img src="images/cpu1.png" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2>
              <p class="text-primary">-50% on Purchase</p>
            </h2>
            <p class="post-meta mb-4" id="l">Buy <a href="bigsale.html"
                class="text-primary font-weight-bold">NOW..</a><span class="block-8-sep">&bullet;</span> Till November
              3, 2023</p>
            <p id="l">Enjoy a fantastic 50% off on all your purchases at our store! It's the perfect time to grab those
              items you've had your eye on or explore new products at unbeatable prices.
              Whether you're shopping for essentials or treating yourself to something special, our 50% discount ensures
              you get more for less.</p>
            <p><a href="shop.php" class="btn btn-primary btn-sm">Shop Now</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div>
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2 id="i">Help</h2>
          </div>
        </div>
      </div>
      <div class="container" id="d">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="row">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="demo.html">Sell online</a></li>
                <li><a href="about.html">Features</a></li>
                <li><a href="cart.html">Shopping cart</a></li>
                <li><a href="shop.php">Shop</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="shop.php">Categories</a></li>
                <li><a href="about.html">Shipping Details</a></li>
                <li><a href="profile.php">Profile</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-4">
              <ul class="list-unstyled">
                <li><a href="demo.html">How to become a Seller?</a></li>
                <li><a href="#">Manage Order</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <h3 class="footer-heading mb-4"></h3>
          <a href="#" class="block-6">
            <!-- Adjust the max-width value to reduce the image size further -->
            <img src="images/kart.jpg" alt="Image placeholder" class="img-fluid rounded mb-4" style="width: 100%; max-width: 100px; height: auto;">
            <h3 class="font-weight-light  mb-0">Finding Your Perfect Gadgets</h3>
            <p>Make Living a Habit</p>
          </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-5 mb-5">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li class="address">203 St. Mountain View, San Francisco, California, USA</li>
              <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
              <li class="email">emailaddress@domain.com</li>
            </ul>
          </div>

          <div class="block-7">
            <form action="#" method="post">
              <label for="email_subscribe" class="footer-heading"></label>
              <div class="form-group">
                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                <input type="submit" class="btn btn-sm btn-primary" value="Send">
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  </footer>
  </div>

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
    document.querySelectorAll('a[href^="#fre"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
  <script>
    document.querySelectorAll('a[href^="#com"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
  <script>
    document.querySelectorAll('a[href^="#big"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('#login-icon').click(function () {
        $(this).toggleClass('clicked');
      });
    });
  </script>

  <script src="script.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var slides = document.querySelectorAll(".slide");
      var currentSlideIndex = 0;

      slides[currentSlideIndex].style.display = "block";

      function showNextSlide() {
        slides[currentSlideIndex].style.display = "none";
        currentSlideIndex = (currentSlideIndex + 1) % slides.length;
        slides[currentSlideIndex].style.display = "block";
      }

      setInterval(showNextSlide, 2000);
    });

  </script>

  <script>
    let currentImageIndex = 0;
    const images = document.querySelectorAll('.container1 img');
    const bulletIndicators = document.getElementById('bulletIndicators');

    function showImage(index) {
      images.forEach((image, i) => {
        if (i === index) {
          image.style.opacity = 1;
        } else {
          image.style.opacity = 0;
        }
      });

      bulletIndicators.querySelectorAll('.bullet').forEach((bullet, i) => {
        if (i === index) {
          bullet.classList.add('active');
        } else {
          bullet.classList.remove('active');
        }
      });
    }

    function nextImage() {
      currentImageIndex = (currentImageIndex + 1) % images.length;
      showImage(currentImageIndex);
    }

    function prevImage() {
      currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
      showImage(currentImageIndex);
    }

    for (let i = 0; i < images.length; i++) {
      const bullet = document.createElement('div');
      bullet.classList.add('bullet');
      bullet.addEventListener('click', () => showImage(i));
      bulletIndicators.appendChild(bullet);
    }

    showImage(currentImageIndex);

    document.getElementById('next').addEventListener('click', nextImage);
    document.getElementById('prev').addEventListener('click', prevImage);

    setInterval(nextImage, 5000); 
  </script>
</body>

</html>