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
                        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
                                href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong
                                class="text-black">Checkout</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <b>
                                <div class="border p-4 rounded" role="alert" style="color: black;">
                                    Returning customer? <a href="signin.php">Click here</a> to login
                                </div>
                            </b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <h2 class="h3 mb-3 text-black">Shipping Details</h2>
                            <div class="p-3 p-lg-5 border">

                                <div class="form-group">
                                    <label for="c_create_account" class="text-black" data-toggle="collapse"
                                        href="#create_an_account" role="button" aria-expanded="false"
                                        aria-controls="create_an_account">
                                        <input type="checkbox" value="1" id="c_create_account">Current Address
                                    </label>
                                    <div class="collapse" id="create_an_account">
                                        <div class="py-2">
                                            <p class="mb-3">Show current address below:</p>
                                            <div class="form-group">
                                                <label for="c_user_address" class="text-black">User Address</label>
                                                <input type="text" class="form-control" id="c_user_address"
                                                    name="c_user_address" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                                        href="#ship_different_address" role="button" aria-expanded="false"
                                        aria-controls="ship_different_address"><input type="checkbox" value="1"
                                            id="c_ship_different_address">
                                        Ship To A Different Address?</label>
                                    <div class="collapse" id="ship_different_address">
                                        <div class="py-2">

                                            <div class="form-group">
                                                <label for="c_diff_country" class="text-black">Country <span
                                                        class="text-danger">*</span></label>
                                                <select id="c_diff_country" class="form-control">
                                                    <option value="1">Select a country</option>
                                                    <option value="2">bangladesh</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Ghana</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Bahrain</option>
                                                    <option value="8">Colombia</option>
                                                    <option value="9">Dominican Republic</option>
                                                </select>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="c_diff_fname" class="text-black">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_fname"
                                                        name="c_diff_fname">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_lname" class="text-black">Last Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_lname"
                                                        name="c_diff_lname">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label for="c_diff_companyname" class="text-black">Company Name
                                                    </label>
                                                    <input type="text" class="form-control" id="c_diff_companyname"
                                                        name="c_diff_companyname">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <label for="c_diff_address" class="text-black">Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_address"
                                                        name="c_diff_address" placeholder="Street address">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="c_diff_state_country" class="text-black">State / Country
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_state_country"
                                                        name="c_diff_state_country">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_postal_zip"
                                                        name="c_diff_postal_zip">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-5">
                                                <div class="col-md-6">
                                                    <label for="c_diff_email_address" class="text-black">Email Address
                                                        <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_email_address"
                                                        name="c_diff_email_address">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="c_diff_phone" class="text-black">Phone <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="c_diff_phone"
                                                        name="c_diff_phone" placeholder="Phone Number">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="c_order_notes" class="text-black">Order Notes</label>
                                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5"
                                        class="form-control" placeholder="Write your notes here..."></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                                    <div class="p-3 p-lg-5 border">

                                        <label for="c_code" class="text-black mb-3">Enter your coupon code if you have
                                            one</label>
                                        <div class="input-group w-75">
                                            <input type="text" class="form-control" id="c_code"
                                                placeholder="Coupon Code" aria-label="Coupon Code"
                                                aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-sm" type="button"
                                                    id="button-addon2">Apply</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h2 class="h3 mb-3 text-black">Your Order</h2>
                                    <div class="p-3 p-lg-5 border">
                                        <table class="table site-block-order-table mb-5">
                                            <thead>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
                                                    <td>$250.00</td>
                                                </tr>
                                                <tr>
                                                    <td>Polo Shirt <strong class="mx-2">x</strong> 1</td>
                                                    <td>$100.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-black font-weight-bold"><strong>Cart
                                                            Subtotal</strong></td>
                                                    <td class="text-black">$350.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-black font-weight-bold"><strong>Order Total</strong>
                                                    </td>
                                                    <td class="text-black font-weight-bold"><strong>$350.00</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsebank" role="button" aria-expanded="false"
                                                    aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                                            <div class="collapse" id="collapsebank">
                                                <div class="py-2">
                                                    <p class="mb-0">Make your payment directly into our bank account.
                                                        Please use your Order ID as
                                                        the payment reference. Your order won’t be shipped until the
                                                        funds have cleared in our
                                                        account.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsecheque" role="button" aria-expanded="false"
                                                    aria-controls="collapsecheque">Cheque Payment</a></h3>

                                            <div class="collapse" id="collapsecheque">
                                                <div class="py-2">
                                                    <p class="mb-0">Make your payment directly into our bank account.
                                                        Please use your Order ID as
                                                        the payment reference. Your order won’t be shipped until the
                                                        funds have cleared in our
                                                        account.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border p-3 mb-5">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsepaypal" role="button" aria-expanded="false"
                                                    aria-controls="collapsepaypal">Paypal</a></h3>

                                            <div class="collapse" id="collapsepaypal">
                                                <div class="py-2">
                                                    <p class="mb-0">Make your payment directly into our bank account.
                                                        Please use your Order ID as
                                                        the payment reference. Your order won’t be shipped until the
                                                        funds have cleared in our
                                                        account.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg py-3 btn-block"
                                                onclick="window.location='thankyou.html'">Place Order</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- </form> -->
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

    </body>

</html>