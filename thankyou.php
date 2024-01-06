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

    .rounded-image {
        border-radius: 20px;
        overflow: hidden;
        display: inline-block;
    }

    .slide-from-right {
        opacity: 0;
        transform: translateX(50px);
        animation: slideLeft 1s ease forwards;
    }

    @keyframes slideLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-word {
        opacity: 0;
        animation: fadeInWord 1s ease forwards;
    }

    @keyframes fadeInWord {
        to {
            opacity: 1;
        }
    }

    .animate-word:nth-child(1) {
        animation-delay: 0.6s;
    }

    .animate-word:nth-child(2) {
        animation-delay: 0.8s;
    }

    .animate-word:nth-child(3) {
        animation-delay: 1s;
    }

    .animate-word:nth-child(4) {
        animation-delay: 1.2s;
    }

    .animate-word:nth-child(5) {
        animation-delay: 1.4s;
    }
    </style>
</head>

<body>

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

            <div class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span class="icon-check_circle display-3 text-success"></span><br>
                            <div class="rounded-image">
                                <img src="images/kart.jpg" alt="">
                            </div>
                            <h2 class="display-3 text-black slide-from-right">Thank you!</h2>
                            <p class="lead mb-5" style="color: black;">
                                <span class="animate-word">Your</span>
                                <span class="animate-word">order</span>
                                <span class="animate-word">was</span>
                                <span class="animate-word">successfully</span>
                                <span class="animate-word">completed.</span>
                            </p>
                            <p><a href="shop.php" class="btn btn-sm btn-primary">Back to shop</a></p>
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

    </body>

</html>