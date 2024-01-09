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
    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        transform: translateY(-100%);
    }

    .modal.fade.show .modal-dialog {
        transform: translateY(0);
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
                        <li class=""><a href="shop.php">Shop</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>


        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Cart</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-total">Total</th>
                                        <th class="product-shop">Shop Now</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
global $productId;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $cartItemsQuery = "SELECT product_id, product_name, quantity, total FROM cart WHERE username = ?";
    $stmt = $conn->prepare($cartItemsQuery);

    if ($stmt) {
        $stmt->bind_param("s", $_SESSION['username']);
        $stmt->execute();
        $cartItemsResult = $stmt->get_result();

        if (!empty($cartItemsResult) && $cartItemsResult->num_rows > 0) {
            while ($row = $cartItemsResult->fetch_assoc()) {

                $productId = $row['product_id'];
                $imageQuery = "SELECT image1 FROM product_images WHERE product_id = ?";
                $imageStmt = $conn->prepare($imageQuery);

                if ($imageStmt) {
                    $imageStmt->bind_param("i", $productId);
                    $imageStmt->execute();
                    $imageResult = $imageStmt->get_result();

                    if ($imageResult->num_rows > 0) {
                        $imageRow = $imageResult->fetch_assoc();
                        $productImage = $imageRow['image1'];

                        $productName = $row['product_name'];
                        $quantity = $row['quantity'];
                        $totalPrice = $row['total'];
                        
                        $uniqueIdentifier = 'cart-item-' . $productId;

                        echo "<tr id='$uniqueIdentifier'>
                                <td><img src='$productImage' alt='$productName' style='max-width: 100px; max-height: 100px;'></td>
                                <td>$productName</td>
                                <td>$quantity</td>
                                <td>₹$totalPrice</td>
                                <td><a href='buy.html' class='btn btn-primary btn-sm'>Shop Now</a></td>
                                <td><a href='#' class='btn btn-primary btn-sm remove-item' data-toggle='modal' data-target='#confirmationModal' data-product-id='$productId' data-row-id='$uniqueIdentifier'>X</a></td>
                              </tr>";
                    }
                    $imageStmt->close();
                } else {
                    echo "<tr><td colspan='6'>Error in preparing image statement.</td></tr>";
                }
            }
        } else {
            echo "<tr><td colspan='6'>Your cart is empty.</td></tr>";
        }
        $stmt->close();
    } else {
        echo "<tr><td colspan='6'>Error in preparing statement.</td></tr>";
    }
} else {
    echo "<tr><td colspan='6'>User not logged in.</td></tr>";
}
?>

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-5">

                            <div class="col-md-6">
                                <button class="btn btn-primary btn-sm btn-block"><a href="shop.html" class="white-link"
                                        style="color: white;">Continue Shopping</a></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="text-black h4" for="coupon">Coupon</label>
                                <p>Enter your coupon code if you have one.</p>
                            </div>
                            <div class="col-md-8 mb-3 mb-md-0">
                                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-sm">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">Subtotal</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">$230.00</strong>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">Total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">$230.00</strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-lg py-3 btn-block"
                                            onclick="window.location='checkout.html'">Proceed To Checkout</button>
                                    </div>
                                </div>
                            </div>
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
                                <li><a href="seller.php">How to become a Seller?</a></li>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const removeButtons = document.querySelectorAll(".remove-item");

        removeButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                const productId = this.getAttribute('data-product-id');
                const tableRow = document.querySelector(`tr[data-product-id='${productId}']`);
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to remove the item?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, remove it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "removeitem.php",
                            data: {
                                product_id: productId
                            },
                            success: function(response) {
                                console.log("Item removed from the cart!");
                                Swal.fire('Removed!',
                                        'The item has been removed from the cart.',
                                        'success')
                                    .then(() => {
                                        location.reload(true);
                                    });
                            },
                            error: function(xhr, status, error) {
                                console.error("Error:", error);
                                Swal.fire('Error!',
                                    'There was an error removing the item.',
                                    'error');
                            }
                        });
                    }
                });
            });
        });
    });
    </script>
</body>

</html>