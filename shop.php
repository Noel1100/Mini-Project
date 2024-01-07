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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


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

    .image-zoom:hover .image-zoom {
        transform: scale(1.05);
        z-index: 2;
        border-radius: 15px;
    }

    .image-zoom:hover .image-zoom-overlay {
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
    #d {
        border: 1px solid #ccc;
        padding: 20px;
    }

    h2 {
        margin-top: 10px;
    }
    </style>
    <style>
    .block-4 {
        height: 1000px;
        width: 110%;
        max-width: 600px;
        margin-right: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .block-4-text {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
        overflow: hidden;
    }

    .block-4-text h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .block-4-text ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .block-4-text ul li {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .block-4-text p {
        font-size: 16px;
        margin: 0;
    }

    .block-4-image {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .block-4-image a {
        display: block;
    }

    .block-4-image img {
        max-width: auto;
        height: auto;
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
                        <li class="active">
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
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">Shop</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div id="page1" class="page-content">

                <div class="row mb-5">
                    <div class="col-md-9 order-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <div class="float-md-left mb-4">
                                        <h2 class="text-black h5">Shop All</h2>
                                    </div>
                                    <div class="d-flex">
                                        <div class="dropdown mr-1 ml-md-auto">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                                    id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                                    <a class="dropdown-item" href="#">Relevance</a>
                                                    <a class="dropdown-item" href="#">Name, A to Z</a>
                                                    <a class="dropdown-item" href="#">Name, Z to A</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Price, low to high</a>
                                                    <a class="dropdown-item" href="#">Price, high to low</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-container">
                            <div class="row mb-5">
                                <?php
                include 'config.php';

                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                  while ($row = $result->fetch_assoc()) {
                    $imageSql = "SELECT image1 FROM product_images WHERE product_id = '{$row['product_id']}'";
                    $imageResult = $conn->query($imageSql);
                    $imageRow = $imageResult->fetch_assoc();
                    $imageUrl = $imageRow['image1'];

                    echo "<div class='col-sm-6 col-lg-4 mb-4' data-aos='fade-up'>
                  <div class='block-4 text-center border'>
                      <figure class='block-4-image d-flex align-items-center justify-content-center' style='height: 500px;object-fit: cover;'>
                          <a href='shop-single.php?show={$row['product_id']}' class='image-zoom'>
                              <img src='{$imageUrl}' alt='Image placeholder' class='img-fluid image-zoom' style='max-height: 100%; width: auto;'>
                              <div class='image-zoom-overlay'></div>
                          </a>
                      </figure>
                      <div class='block-4-text p-4' id='oo'>
                          <h3><a href='shop-single.php?show={$row['product_id']}'>{$row['product_name']}</a></h3>
                          <p>{$row['description']}</p>
                          <p class='text-primary font-weight-bold'>M.R.P ₹ {$row['price']}</p>
                      </div>
                  </div>
              </div>";
                  }
                } else {
                  echo "No products found.";
                }
                ?>
                            </div>
                        </div>

                        <div class="row container text-center" data-aos="fade-up">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <li class="active"><a href="#1" onclick="navigateToPage(1)">1</a></li>
                                        <li><a href="#2" onclick="navigateToPage(2)">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class=" order-1 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#" class="d-flex"><span>Mobiles & Accessories</span> <span
                                            class="text-black ml-auto">(2,220)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Gaming console</span> <span
                                            class="text-black ml-auto">(2,550)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>PC & Laptop</span> <span
                                            class="text-black ml-auto">(2,124)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Camera & Accessories</span></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Audio Entertainment</span></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Wearable Technology</span></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Home Appliances</span></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Personel Gadgets</span></li>
                            </ul>
                        </div>

                        <!-- Filter Box -->
                        <div class="border p-4 rounded mb-4">
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                                <div id="slider-range" class="border-primary"></div>
                                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white"
                                    disabled="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="site-section">

                <div id="page2" class="page-content" style="display: none;">

                    <div class="row mb-5">
                        <div class="col-md-9 order-2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mb-5">
                                        <div class="float-md-left mb-4">
                                            <h2 class="text-black h5">Shop All</h2>
                                        </div>
                                        <div class="d-flex">
                                            <div class="dropdown mr-1 ml-md-auto">
                                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                                    id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Latest
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                    <a class="dropdown-item" href="#">Men</a>
                                                    <a class="dropdown-item" href="#">Women</a>
                                                    <a class="dropdown-item" href="#">Children</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                                    id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                                    <a class="dropdown-item" href="#">Relevance</a>
                                                    <a class="dropdown-item" href="#">Name, A to Z</a>
                                                    <a class="dropdown-item" href="#">Name, Z to A</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Price, low to high</a>
                                                    <a class="dropdown-item" href="#">Price, high to low</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="" id="1">
                                    <div class="row mb-5">

                                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                            <div class="block-4 text-center border">
                                                <figure class="block-4-image">
                                                    <a href="shop-single.html?item=4" class="image-zoom-container"><img
                                                            src="images/phone.jpg" alt="Image placeholder"
                                                            class="img-fluid image-zoom">
                                                        <div class="image-zoom-overlay"></div>
                                                    </a>
                                                </figure>
                                                <div class="block-4-text p-4" id="oo">
                                                    <h3><a href="shop-single.html?item=4">Lava Blaze 5G</a></h3>
                                                    <p class="mb-0">Buy the Lava Blaze 5G 128 GB (Glass Green, 8 GB RAM)
                                                        and delve into a new
                                                        world of possibilities. The stylish and marvellous design of the
                                                        phone attracts everyone.
                                                    </p>
                                                    <p class="text-primary font-weight-bold">M.R.P
                                                        ₹
                                                        13,999</p>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                            <div class="block-4 text-center border">
                                                <figure class="block-4-image">
                                                    <a href="shop-single.html?item=4" class="image-zoom-container"><img
                                                            src="images/phone.jpg" alt="Image placeholder"
                                                            class="img-fluid image-zoom">
                                                        <div class="image-zoom-overlay"></div>
                                                    </a>
                                                </figure>
                                                <div class="block-4-text p-4" id="oo">
                                                    <h3><a href="shop-single.html?item=4">Lava Blaze 5G</a></h3>
                                                    <p class="mb-0">Buy the Lava Blaze 5G 128 GB (Glass Green, 8 GB RAM)
                                                        and delve into a new
                                                        world of possibilities. The stylish and marvellous design of the
                                                        phone attracts everyone.
                                                    </p>
                                                    <p class="text-primary font-weight-bold">M.R.P
                                                        ₹
                                                        13,999</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row container text-center" data-aos="fade-up">
                                        <div class="col-md-12 text-center">
                                            <div class="site-block-27">
                                                <ul>

                                                    <li><a href="#1" onclick="navigateToPage(1)">1</a></li>
                                                    <li class="active"><a href="#2" onclick="navigateToPage(2)">2</a>
                                                    </li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" order-1 mb-5 mb-md-0">
                            <div class="border p-4 rounded mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Mobiles & Accessories</span> <span
                                                class="text-black ml-auto">(2,220)</span></a></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Gaming console</span> <span
                                                class="text-black ml-auto">(2,550)</span></a></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>PC & Laptop</span> <span
                                                class="text-black ml-auto">(2,124)</span></a></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Camera & Accessories</span></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Audio Entertainment</span></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Wearable Technology</span></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Home Appliances</span></li>
                                    <li class="mb-1"><a href="#" class="d-flex"><span>Personel Gadgets</span></li>
                                </ul>
                            </div>

                            <!-- Filter Box -->
                            <div class="border p-4 rounded mb-4">
                                <div class="mb-4">
                                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                                    <div id="slider-range" class="border-primary"></div>
                                    <input type="text" name="text" id="amount"
                                        class="form-control border-0 pl-0 bg-white" disabled="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <div>
                            <h2>New</h2>
                        </div>
                    </div>
                    <div class="site-section site-blocks-2" id="cat">
                        <div class="container" style="width: 80%; max-width: none;">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade" data-aos-delay="">
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
                                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade" data-aos-delay="100">
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
                                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade" data-aos-delay="200">
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



    <footer class="site-footer border-top">

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

        <script>
        function navigateToPage(pageNumber) {
            window.location.hash = '#' + pageNumber;

            var pageContents = document.getElementsByClassName('page-content');
            for (var i = 0; i < pageContents.length; i++) {
                pageContents[i].style.display = 'none';
            }

            var selectedPage = document.getElementById('page' + pageNumber);
            if (selectedPage) {
                selectedPage.style.display = 'block';
                window.scrollTo(0, selectedPage.offsetTop);
            }
        }

        window.addEventListener('load', function() {
            if (window.location.hash) {
                var pageNumber = window.location.hash.substr(1);
                navigateToPage(pageNumber);
            }
        });
        </script>

        <script>
        $(document).ready(function() {
            initializeSlider();
        });

        function initializeSlider() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 50000,
                values: [50, 300],
                slide: function(event, ui) {
                    $("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                }
            });

            $("#amount").val("₹" + $("#slider-range").slider("values", 0) +
                " - ₹" + $("#slider-range").slider("values", 1));
        }
        </script>

</body>

</html>