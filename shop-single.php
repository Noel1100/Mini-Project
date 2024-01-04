<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  $username = '';
}

function getProductDetails($productId)
{
  global $conn;
  $productDetails = [];
  $query = "SELECT * FROM products WHERE product_id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param('i', $productId);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $productDetails['data'] = $result->fetch_assoc();

    $imageQuery = "SELECT image1, image2, image3, image4 FROM product_images WHERE product_id = ?";
    $imgStmt = $conn->prepare($imageQuery);
    if ($imgStmt === false) {
      die('Image SQL query preparation failed: ' . $conn->error);
    }
    
    $imgStmt->bind_param('i', $productId);
    $imgStmt->execute();
    $imgResult = $imgStmt->get_result();
    if ($imgResult === false) {
      die('Image SQL query execution failed: ' . $imgStmt->error);
    }
     if ($imgResult->num_rows > 0) {
      $productDetails['images'] = $imgResult->fetch_assoc();
    } else {
      $productDetails['images'] = null;
    }
  } else {
    $productDetails['data'] = null;
  }

  return $productDetails;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addToCart'])) {
    if(isset($_POST['productId']) && isset($_POST['quantity'])){
      $productId = $_POST['productId'];
      $quantity = $_POST['quantity'];
      $productData = getProductDetails($productId);
      if (!empty($productData['data'])) {
        $product = $productData['data'];
        $price = $product['price'];
        $productName = $product['product_name'];
        $totalPrice = $price * $quantity;
        $username = $_SESSION['username'];
        $sql = "INSERT INTO cart (product_id, quantity, username, product_name, total) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iissd', $productId, $quantity, $username, $productName, $totalPrice);

        if ($stmt->execute()) {
          echo "Product added to cart successfully.";
        } else {
          echo "Error: " . $stmt->error;
        }
      } else {
        echo "Product details not found.";
      }
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buynow'])) {
    if(isset($_POST['productId']) && isset($_POST['quantity'])){
      $productId = $_POST['productId'];
      $quantity = $_POST['quantity'];
      $productData = getProductDetails($productId);
      if (!empty($productData['data'])) {
        $product = $productData['data'];
        $price = $product['price'];
        $productName = $product['product_name'];
        $totalPrice = $price * $quantity;
        $username = $_SESSION['username'];
        $sql = "INSERT INTO orders (product_id, quantity, username, product_name, total) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iissd', $productId, $quantity, $username, $productName, $totalPrice);

        if ($stmt->execute()) {
          echo "Product added to cart successfully.";
        } else {
          echo "Error: " . $stmt->error;
        }
      } else {
        echo "Product details not found.";
      }
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buynow'])) {
    if(isset($_POST['productId']) && isset($_POST['quantity'])){
      $productId = $_POST['productId'];
      $quantity = $_POST['quantity'];
      $productData = getProductDetails($productId);
      if (!empty($productData['data'])) {
        $product = $productData['data'];
        $price = $product['price'];
        $productName = $product['product_name'];
        $totalPrice = $price * $quantity;
        $username = $_SESSION['username'];
        $sql = "INSERT INTO cart (product_id, quantity, username, product_name, total) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('iissd', $productId, $quantity, $username, $productName, $totalPrice);

        if ($stmt->execute()) {
          echo "Product added to cart successfully.";
        } else {
          echo "Error: " . $stmt->error;
        }
      } else {
        echo "Product details not found.";
      }
    }
  }
  
if (isset($_GET['show'])) {
  $productId = $_GET['show'];
  $productData = getProductDetails($productId);

  if (!empty($productData['data'])) {
    $product = $productData['data'];
    $images = $productData['images'];

    $name = $product['product_name'];
    $brand = $product['brand'];
    $price = $product['price'];
    $desc = $product['description'];
    $highlights = $product['highlights'];
    $stock = $product['stock'];
    $size = $product['size'];
    $color = $product['color'];
    $weight = $product['weight'];
    $inthebox = $product['inthebox'];
    $connectivity = $product['connectivity'];

    $image = $images['image1'];
    $image1 = $images['image2'];
    $image2 = $images['image3'];
    $image3 = $images['image4'];
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

    .thumb {
        cursor: pointer;
        transition: transform 0.5s;
    }

    .thumb.active {
        transform: scale(1.2);
    }
    </style>
    <style>
    #pl {
        margin-top: 40px;
        margin-left: 5px;
        width: 50%;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    .category-box {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 2px 2px 5px #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }

    .category-divider {
        border-bottom: 1px solid #ddd;
        margin-bottom: 15px;
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

    .thumb {
        cursor: pointer;
        transition: transform 0.5s;
    }

    .thumb.active {
        transform: scale(1.2);
    }
    </style>
    <style>
    #pl {
        margin-top: 40px;
        margin-left: 5px;
        width: 50%;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    .category-box {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 2px 2px 5px #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }

    .category-divider {
        border-bottom: 1px solid #ddd;
        margin-bottom: 15px;
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

    #d {
        border: 1px solid #ccc;
        padding: 20px;
    }

    h2 {
        margin-top: 10px;
    }
    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 300px; 
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 1000;
    }

    .modal-content {
        text-align: center;
    }

    .modal button {
        margin-top: 15px;
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
                            <a href="about.html">About</a>
                        </li>
                        <li class=""><a href="shop.php">Shop</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>



        <div id="item-container">
            <div class="site-section">
                <div class="container show">
                    <div class="row">
                        <div class="col-md-6" style="border-right: 1px solid #2e2e2e;">
                            <img id="main-image" src="<?php echo $image ?>" alt="Image" class="img-fluid">
                            <br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo $image1 ?>" alt="Image 2" class="img-fluid thumb"
                                        data-src="<?php echo $image1 ?>" onclick="changeMainImage(this)"
                                        style="width: 200px; height: 200px;">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo $image2 ?>" alt="Image 3" class="img-fluid thumb"
                                        data-src="<?php echo $image2 ?>" onclick="changeMainImage(this)"
                                        style="width: 200px; height: 200px;">
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo $image3 ?>" alt="Image 4" class="img-fluid thumb"
                                        data-src="<?php echo $image3 ?>" onclick="changeMainImage(this)"
                                        style="width: 200px; height: 200px;">
                                </div>
                            </div>
                        </div>

                        <script>
                        function changeMainImage(thumbnail) {
                            var mainImage = document.getElementById('main-image');
                            mainImage.src = thumbnail.getAttribute('data-src');
                        }
                        </script>

                        <div class="col-md-6" style="overflow-y: auto;">
                            <h3 style="color: black;"><?php echo $name ?></h3>
                            <p style="color: black;"><?php echo $desc ?></p><br>
                            <p><strong class="text-primary h3">M.R.P <?php echo $price ?></strong></p>

                            <form id="addToCartForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <label for="quantity">Quantity:</label>
                                <input type="number" id="quantity" name="quantity" value="1" min="1"
                                    max="<?php echo $stock; ?>">
                                <input type="submit" name="addToCart" class="btn btn-primary btn-block addToCartBtn"
                                    value="Add to Cart" style="width: 200px; padding: 5px;">
                            </form>

                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <p>Product added to cart</p>
                                    <button id="closeModal" class="btn btn-secondary">OK</button>
                                    <a id="goToCart" class="btn btn-primary" href="cart.php">Go to Cart</a>
                                </div>
                            </div>

                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="productId" value="<?php echo $productId; ?>">
                                <input type="submit" name="buynow" class="btn btn-primary btn-block" value="Buy Now"
                                    style="width: 200px; padding: 5px;">
                            </form>

                            <hr>
                            <p><strong class="text-secondary h5">Units Available: <?php echo $stock ?></strong></p>
                            <p><strong class="text-secondary h5">Product Hightlights: <?php echo $highlights ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="pl">
        <p class="h3" style="color: black; text-align: center;">Product Specifications</p>

        <ul>
            <div class="category-box">
                <strong style="color:black;"><b>General</b></strong>
                <ul class="details-list">
                    <li><span class="details-label">Brand: </span><span
                            class="details-value"><?php echo $brand ?></span></li>
                    <li><span class="details-label">Name: </span><span class="details-value"><?php echo $name ?></span>
                    </li>
                </ul>

                <li class="category-divider"></li>

                <strong style="color:black;"><b>Features</b></strong>
                <ul class="details-list">
                    <li><span class="details-label">Size: </span><span class="details-value"><?php echo $size ?></span>
                    </li>
                    <li><span class="details-label">Weight: </span><span
                            class="details-value"><?php echo $weight ?></span>
                    </li>
                </ul>

                <li class="category-divider"></li>

                <strong style="color:black;"><b>Connectivity</b></strong>
                <ul class="details-list">
                    <li><span class="details-label">Connectivity: </span><span
                            class="details-value"><?php echo $connectivity ?>
                            '</span></li>
                </ul>

                <li class="category-divider"></li>

                <strong style="color:black;"><b>Other Details</b></strong>
                <ul class="details-list">
                    <li><span class="details-label">In the Box: </span><span
                            class="details-value"><?php echo $inthebox ?>
                            '</span></li>
                    <li><span class="details-label">Color: </span><span
                            class="details-value"><?php echo $color ?></span></li>
                </ul>
            </div>
        </ul>
    </div>
    </div>
    </div>
    </div>
    <footer class="site-footer border-top">
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
                                <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                                <input type="submit" class="btn btn-sm btn-primary" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                </div>

            </div>
        </div>
    </footer>

    <script>
    function incrementQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        quantityInput.value = parseInt(quantityInput.value) + 1;
        updateQuantity(quantityInput.value); // Update hidden input
    }

    function decrementQuantity() {
        var quantityInput = document.getElementById('quantityInput');
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            updateQuantity(quantityInput.value); // Update hidden input
        }
    }

    function updateQuantity(value) {
        // Update the hidden input field with the selected quantity
        document.getElementById('selectedQuantity').value = value;
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#addToCartForm').submit(function(event) {
            event.preventDefault();
            $('#myModal').css('display', 'block');
        });

        $('#closeModal').click(function() {
            $('#myModal').css('display', 'none');
        });
    });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to center the modal
        function centerModal() {
            var modal = $('.modal');
            var windowHeight = $(window).height();
            var windowWidth = $(window).width();
            var modalHeight = modal.outerHeight();
            var modalWidth = modal.outerWidth();

            var topPosition = (windowHeight - modalHeight) / 2;
            var leftPosition = (windowWidth - modalWidth) / 2;

            modal.css({
                'top': topPosition + 'px',
                'left': leftPosition + 'px'
            });
        }

        // Show modal on form submit
        $('#addToCartForm').submit(function (event) {
            event.preventDefault();
            $('#myModal').css('display', 'block');
            centerModal();
        });

        // Close modal when "OK" button is clicked
        $('#closeModal').click(function () {
            $('#myModal').css('display', 'none');
        });

        // Update modal position on window resize
        $(window).resize(function () {
            centerModal();
        });
    });
</script>



    <script>
    document.getElementById('Cart').addEventListener('click', function() {
        var productId = <?php echo json_encode($productId); ?>; // Retrieve product ID from PHP
        var quantity = document.getElementById('quantityInput').value; // Retrieve quantity from input field

        // AJAX request
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'cart.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Handle success response from the server
                    alert(xhr.responseText); // Show success message or perform further actions
                } else {
                    // Handle error response from the server
                    alert('Error: ' + xhr.statusText);
                }
            }
        };
        xhr.send('Cart=1&productId=' + productId + '&quantity=' + quantity); // Send data to cart.php
    })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-magnific-popup/1.1.0/jquery.magnific-popup.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php
  } else {
    echo "No products found.";
  }
}
?>