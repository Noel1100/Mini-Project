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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
    /* CSS styles for the heading */
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
        /* Optional: Add a border for visualization */
        padding: 20px;
        /* Add padding to create space inside the container */
    }

    h2 {
        margin-top: 10px;
        /* Add margin to the top of the heading to create space */
    }
    </style>

    <style>
    .white-link {
        color: white;
        /* Add any other desired styles */
    }

    .white-link:hover {
        color: white;
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
    </style>

    <style>
    /* Add this CSS code to your stylesheet */
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
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
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

                        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                            <div class="site-top-icons">
                                <ul>
                                    <li><a href="signin.html"><span class="icon icon-person"></span></a></li>
                                    <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                                    <li>
                                        <a href="cart.html" class="site-cart active" style="color: blue;">
                                            <span class="icon icon-shopping_cart"></span>
                                            <span class="count">2</span>
                                        </a>
                                    </li>
                                    <li class="d-inline-block d-md-none ml-md-0"><a href="#"
                                            class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a>
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
                        <li class="has-children">
                            <a href="index.php">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html#fre">Featured Products</a></li>
                                <li><a href="index.html#com">Combo Offers</a></li>
                                <li><a href="bigsale.html">Big Sale!</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="about.html">About</a>
                            <ul class="dropdown">
                                <li><a href="about.html#TheTeam">The Team</a></li>
                                <li><a href="#i">Help</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
            $price = $row['total'];
            $totalPrice = $quantity * $price;

            echo "<tr>
                    <td><img src='$productImage' alt='$productName' style='max-width: 100px; max-height: 100px;'></td>
                    <td>$productName</td>
                    <td>$quantity</td>
                    <td>₹$totalPrice</td>
                    <td><a href='buy.html' class='btn btn-primary btn-sm'>Shop Now</a></td>
                    <td><a href='#' class='btn btn-primary btn-sm remove-item' data-toggle='modal' data-target='#confirmationModal'>X</a></td>
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
                                <button class="btn btn-primary btn-sm btn-block"><a href="shop.html"
                                        class="white-link">Continue Shopping</a></button>
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
                        <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
                        <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
                        <p>Promo from nuary 15 &mdash; 25, 2019</p>
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
                                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
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

    <!-- Add your Bootstrap and jQuery dependencies as you mentioned -->

    <script>
  document.addEventListener("DOMContentLoaded", function() {
    const removeButtons = document.querySelectorAll(".remove-item");

    removeButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            event.preventDefault();
            const productId = this.getAttribute('data-product-id');

            // Store the product ID in a data attribute of the confirmation modal
            document.getElementById("confirmRemove").setAttribute("data-product-id", productId);

            // Show the modal for confirmation
            $('#confirmationModal').modal('show');
        });
    });

    // Add an event listener to the "Remove" button in the modal for confirmation
    document.getElementById("confirmRemove").addEventListener("click", function() {
        const productId = this.getAttribute('data-product-id');

        $.ajax({
            type: "POST",
            url: "removeitem.php", // PHP script to handle removal
            data: { product_id: productId },
            success: function(response) {
                console.log("Item removed from the cart!");
                // You can update the UI accordingly (e.g., remove the table row)
                // If you want to remove the table row, you can do it here
                const tableRow = document.querySelector(`tr[data-product-id='${productId}']`);
                if (tableRow) {
                    tableRow.remove();
                }
                // Close the modal after successful removal
                $('#confirmationModal').modal('hide');
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

    // Add an event listener when the modal is hidden
    $('#confirmationModal').on('hidden.bs.modal', function() {
        // Remove the blur effect and backdrop
        document.body.classList.remove("modal-open");
        $('.modal-backdrop').remove();
    });
});
    </script>


    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <i style="font-size: 100px; color: red; align-self: center;">&#9432;</i>
                <div class="modal-body" style="color: black; text-align: center;">
                    <h4>Do you want to remove the item?</h4>
                </div>
                <div class="modal-footer" style="align-self: center;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <!-- Change onclick to call JavaScript function to handle removal -->
                    <button type="button" class="btn btn-primary" id="confirmRemove">Remove</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>