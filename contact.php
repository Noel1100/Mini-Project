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
                        <li class="">
                            <a href="about.php">About</a>
                        </li>
                        <li class="">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li class="has-children active">
                            <a href="contact.php">Contact Us</a>
                            <ul class="dropdown">
                                <li><a href="#i">Help</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">Contact</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Get In Touch</h2>
                    </div>
                    <div class="col-md-7">

                        <form action="#" method="post">

                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_fname" name="c_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_lname" name="c_lname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_email" class="text-black">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="c_email" name="c_email"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_subject" class="text-black">Subject </label>
                                        <input type="text" class="form-control" id="c_subject" name="c_subject">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_message" class="text-black">Message </label>
                                        <textarea name="c_message" id="c_message" cols="30" rows="7"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"
                                            value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">New York</span>
                            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">London</span>
                            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">Canada</span>
                            <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
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
                                    <li><a href="#">Sell online</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Shopping cart</a></li>
                                    <li><a href="#">Store builder</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Mobile commerce</a></li>
                                    <li><a href="#">Dropshipping</a></li>
                                    <li><a href="#">Website development</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><a href="#">Point of sale</a></li>
                                    <li><a href="#">Hardware</a></li>
                                    <li><a href="#">Software</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <h3 class="footer-heading mb-4">Promo</h3>
                        <a href="#" class="block-6">
                            <!-- Adjust the max-width value to reduce the image size further -->
                            <img src="images/kart.jpg" alt="Image placeholder" class="img-fluid rounded mb-4"
                                style="width: 100%; max-width: 100px; height: auto;">
                            <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
                            <p>Promo from January 15 &mdash; 25, 2019</p>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-5 mb-5">
                            <h3 class="footer-heading mb-4">Contact Info</h3>
                            <ul class="list-unstyled">
                                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                                <li class="email">emailaddress@domain.com</li>
                            </ul>
                        </div>

                        <div class="block-7">
                            <form action="#" method="post">
                                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                                <div class="form-group">
                                    <input type="text" class="form-control py-4" id="email_subscribe"
                                        placeholder="Email">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
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