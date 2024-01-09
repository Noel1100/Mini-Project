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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
    #d {
        border: 1px solid #ccc;
        padding: 20px;
    }

    h2 {
        margin-top: 10px;
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

    .animated-truck {
        animation: truck 2s linear infinite alternate;
    }


    @keyframes rotateRefresh {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

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

    @keyframes beatHelp {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }

    .animated-help {
        animation: popHelp 2s ease-in-out infinite, beatHelp 2s linear infinite alternate;
    }

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

    .fa-play {
        font-size: 40px;
        z-index: 1;
    }

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
        height: auto;
        display: inline-block;
        vertical-align: middle;
    }

    .block {
        opacity: 0;
        transform: translateX(-100%);
        transition: opacity 0.5s ease, transform 1s ease;
    }

    .block:nth-child(1) {
        animation: slideInFromLeft 2s ease 3s forwards;
    }

    .block:nth-child(2) {
        animation: slideInFromLeft 2s ease 2s forwards;
    }

    .block:nth-child(3) {
        animation: slideInFromLeft 2s ease 1s forwards;
    }

    @keyframes slideInFromLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .block-38-header img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        transform: scale(1);
        transition: transform 0.3s;
    }

    .block-38-header:hover img {
        transform: scale(1.4);
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

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left"
                            style="padding-left: 50px;">
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
                        <li class="has-children active">
                            <a href="about.php">About</a>
                            <ul class="dropdown">
                                <li><a href="#TheTeam">The Team</a></li>
                                <li><a href="#i">Help</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="">About</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <figure>
                            <img src="images/kart1.png" alt="Image placeholder" class="img-fluid rounded-image">
                            <a href="https://youtu.be/ACf6bCW2HeE?si=0rv3OumWbajEYX0i" class="play-button">
                                <span class="fa fa-play"></span>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">


                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">How We Started</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam,
                        nemo
                        exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos
                        sequi hic
                        fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum
                        quas.</p>
                    <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in,
                        quibusdam cumque recusandae, laudantium minima repellendus.</p>

                </div>
            </div>
        </div>
    </div>
    <div id="TheTeam">
        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>The Team</h2>
                    </div>
                </div>
                <div class="row justify-content-center" id="team-container">
                    <div class="col-md-6 col-lg-3 block team-member">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="images/me1.jpg" alt="Image placeholder" class="mb-4"
                                        style="border-radius: 20%; width: 140px; height: 150px;">
                                    <h3 class="block-38-heading h4">Noel S Thomas</h3>
                                    <p class="block-38-subheading" style="color: black;">Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p style="color: black;">Able to inspire and motivate the team that makes our strong
                                        work ethic and
                                        passion for our mission.</p>
                                    <a
                                        href="https://www.linkedin.com/in/noel-s-thomas-3828a526b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                        <i class="fa fa-linkedin-square"
                                            style="font-size:28px;color:#7971ea; padding-right: 10px;"></i></a>
                                    <a href="https://www.instagram.com/noel_s_thomas?igsh=ODA1NTc5OTg5Nw=="><i
                                            class="fa fa-instagram" style="font-size:28px;color:#7971ea;"></i></a>
                                    <a href=""><i class="fa fa-facebook-f"
                                            style="font-size:28px;color:#7971ea; padding-left: 10px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 block team-member">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="images/giku2.png" alt="Image placeholder" class="mb-4"
                                        style="border-radius: 20%; width: 140px; height: 150px;">
                                    <h3 class="block-38-heading h4">Giku Cherian Pothen</h3>
                                    <p class="block-38-subheading" style="color: black;">Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p style="color: black;">Able to inspire and motivate the team that makes our strong
                                        work ethic and
                                        passion for our mission.</p>
                                    <a href=""><i class="fa fa-linkedin-square"
                                            style="font-size:28px;color:#7971ea; padding-right: 10px;"></i></a>
                                    <a href="https://www.instagram.com/giku_pothen?igsh=ODA1NTc5OTg5Nw=="><i
                                            class="fa fa-instagram" style="font-size:28px;color:#7971ea;"></i></a>
                                    <a href=""><i class="fa fa-facebook-f"
                                            style="font-size:28px;color:#7971ea; padding-left: 10px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 block team-member">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="images/bilen2.png" alt="Image placeholder" class="mb-4"
                                        style="border-radius: 20%; width: 130px; height: 150px;">
                                    <h3 class="block-38-heading h4">Bilen Antony</h3>
                                    <p class="block-38-subheading" style="color: black;">Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p style="color: black;">Able to inspire and motivate the team that makes our strong
                                        work ethic and
                                        passion for our mission.</p>
                                    <a
                                        href="https://www.linkedin.com/in/bilen-antony-977386244?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                        <i class="fa fa-linkedin-square"
                                            style="font-size:28px;color:#7971ea; padding-right: 10px;"></i></a>
                                    <a href="https://www.instagram.com/bil.en_?igsh=ODA1NTc5OTg5Nw=="><i
                                            class="fa fa-instagram" style="font-size:28px;color:#7971ea;"></i></a>
                                    <a href=""><i class="fa fa-facebook-f"
                                            style="font-size:28px;color:#7971ea; padding-left: 10px;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Shipping</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan
                            tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Free Returns</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan
                            tincidunt fringilla.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Customer Support</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer
                            accumsan
                            tincidunt fringilla.</p>
                    </div>
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
                                <li><a href="seller.php">How to become a Seller?</a></li>
                                <li><a href="#">Manage Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h3 class="footer-heading mb-4"></h3>
                    <a href="#" class="block-6">
                        <!-- Adjust the max-width value to reduce the image size further -->
                        <img src="images/kart.jpg" alt="Image placeholder" class="img-fluid rounded mb-4"
                            style="width: 100%; max-width: 100px; height: auto;">
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
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>

    <script>
    document.querySelectorAll('a[href^="#i"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>

    <script>
    document.querySelectorAll('a[href^="#cat"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    </script>


</body>

</html>