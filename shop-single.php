<?php
include 'config.php';        // Check if the product ID is set in the URL
if (isset($_GET['show'])) {
  $proId = $_GET['show'];

  // Fetch product details from the database based on the product ID
  $proSql = "SELECT * FROM products WHERE product_id = '$proId'";
  $proResult = $conn->query($proSql);

  if ($proResult && $proResult->num_rows > 0) {
    $proRow = $proResult->fetch_assoc();
    // Retrieve product details
    $name = $proRow['product_name'];
    $brand = $proRow['brand'];
    $price = $proRow['price'];
    $desc = $proRow['description'];
    $stock = $proRow['stock'];
    $size = $proRow['size'];
    $weight = $proRow['weight'];
    $color = $proRow['color'];
    $inthebox = $proRow['inthebox'];
    $highlights = $proRow['highlights'];
    $connectivity = $proRow['connectivity'];

    // Output the product data in the desired style
    $imageSql = "SELECT image, image1, image2, image3 FROM product_images WHERE product_id = '$proId'";
    $imageResult = $conn->query($imageSql);
    $imageRow = $imageResult->fetch_assoc();
    $imageUrl = $imageRow['image'];
    $imageUrl1 = isset($imageRow['image1']) ? $imageRow['image1'] : '';
    $imageUrl2 = isset($imageRow['image2']) ? $imageRow['image2'] : '';
    $imageUrl3 = isset($imageRow['image3']) ? $imageRow['image3'] : '';
    echo ' <!DOCTYPE html>
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
      /* Make the image responsive */
      height: auto;
      /* Automatically adjust the image height */
      display: inline-block;
      vertical-align: middle;
      /* Align the image vertically with the text */
    }

    /* Style for the thumbnail images */
    .thumb {
      cursor: pointer;
      transition: transform 0.5s;
    }

    /* Style for the active thumbnail */
    .thumb.active {
      transform: scale(1.2);
    }
  </style>
  <style>
    #pl {
      margin-top: 40px;
      margin-left: 5px;
      /* Adjust the left margin as needed */
      width: 50%;
      /* Set the width to take up half of the page */
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
                  <li>
                    <a href="demo.html" class="btn btn-sm custom-button">
                      <span class="icon"><i class="fas fa-solid fa-store"></i></span>Become a Seller
                    </a>
                  </li>

                  <li>
                    <a href="signin.php" class="btn btn-sm custom-button">
                      <span class="icon"><i class="fas fa-sign-in-alt"></i></span> Login
                    </a>
                  </li>

                  <li>
                    <a href="cart.html" class="site-cart btn btn-sm custom-button">
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

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Shop</strong>
          </div>
        </div>
      </div>
    </div>
    <div id="item-container">
                <div class="site-section">
        <div class="container show">
          <div class="row">
  <div class="col-md-6" style="border-right: 1px solid #2e2e2e;">
                                <img id="main-image" src="' . $imageUrl . '" alt="Image" class="img-fluid">
                                <br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="' . $imageUrl1 . '" alt="Image 2" class="img-fluid thumb"
                                            data-src="' . $imageUrl1 . '" id="sub-image1" style="width: 150px; height: 100px;">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="' . $imageUrl2 . '" alt="Image 3" class="img-fluid thumb"
                                            data-src="' . $imageUrl2 . '" id="sub-image2" style="width: 150px; height: 100px;">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="' . $imageUrl3 . '" alt="Image 4" class="img-fluid thumb"
                                            data-src="' . $imageUrl3 . '" id="sub-image3" style="width: 150px; height: 100px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="overflow-y: auto;">
                    <h3 style="color: black;">' . $name . '</h3>
                    <p style="color: black;">' . $desc . '</p><br>
                    <p><strong class="text-primary h3">M.R.P ' . $price . '</strong></p>
                    <div class="mb-5">
                      <div class="input-group mb-3" style="max-width: 120px;">
  <div class="input-group-prepend">
    <button class="btn btn-outline-primary js-btn-minus" type="button" onclick="decrementQuantity()">−</button>
  </div>
  <input id="quantityInput" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
  <div class="input-group-append">
    <button class="btn btn-outline-primary js-btn-plus" type="button" onclick="incrementQuantity()">+</button>
  </div>
</div>

            </div>
            <p><!-- Link to cart page with parameters -->
              <a href="cart.html" class="btn btn-primary">Add to Cart</a>
              <a href="#" class="buy-now btn btn-sm btn-primary" id="buyNowLink">Buy Now</a>
              </p>
              <hr>
              <p><strong class="text-secondary h5">Units Available: ' . $stock . '</strong></p>
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
            <li><span class="details-label">Brand: </span><span class="details-value">'.$brand.'</span></li>
            <li><span class="details-label">Name: </span><span class="details-value">'.$name.'</span></li>
        </ul>

        <li class="category-divider"></li>

        <strong style="color:black;"><b>Features</b></strong>
        <ul class="details-list">
            <li><span class="details-label">Size: </span><span class="details-value">'.$size.'</span></li>
            <li><span class="details-label">Weight: </span><span class="details-value">'.$weight.'</span></li>
        </ul>

        <li class="category-divider"></li>

         <strong style="color:black;"><b>Connectivity</b></strong>
        <ul class="details-list">
            <li><span class="details-label">Connectivity: </span><span class="details-value">'.$connectivity.'</span></li>
        </ul>

        <li class="category-divider"></li>

         <strong style="color:black;"><b>Other Details</b></strong>
        <ul class="details-list">
            <li><span class="details-label">In the Box: </span><span class="details-value">'.$inthebox.'</span></li>
            <li><span class="details-label">Color: </span><span class="details-value">'.$color.'</span></li>
        </ul>
    </div>
</ul>
</div>

      </div>
    </div>
   </div>
          </div>';
  } else {
    echo "No products found.";
  }
  $conn->close();
} else {
  echo "Product ID not provided.";
}
?>
<script>
  function addToCart(productName, imageURL, quantity, total) {
    // Retrieve existing cart items from localStorage
    const existingCartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Add the new item to the cart
    const newItem = {
      productName,
      imageURL,
      quantity,
      total
    };
    existingCartItems.push(newItem);

    // Save the updated cart items back to localStorage
    localStorage.setItem('cartItems', JSON.stringify(existingCartItems));

    // Optionally, you can redirect to the cart page after adding the item
    window.location.href = 'cart.html';
  }
</script>
<script>
  function incrementQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    quantityInput.value = parseInt(quantityInput.value) + 0;
  }

  function decrementQuantity() {
    var quantityInput = document.getElementById('quantityInput');
    if (parseInt(quantityInput.value) > 1) {
      quantityInput.value = parseInt(quantityInput.value) - 0;
    }
  }

  function addToBuy(itemTitle, quantity, price) {
    // Assuming buyItems is an array in localStorage
    let buyItems = JSON.parse(localStorage.getItem('buyItems')) || [];

    // Add the current item to the buyItems array with the updated quantity
    buyItems.push({
      title: itemTitle,
      quantity: quantity,
      price: price
    });

    // Save the updated buyItems array to localStorage
    localStorage.setItem('buyItems', JSON.stringify(buyItems));

    // Redirect to the buy.html page
    window.location.href = 'buy.html';
  }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const mainImage = document.getElementById('main-image');
    const thumbnails = document.querySelectorAll('.thumb');

    thumbnails.forEach(thumb => {
      thumb.addEventListener('click', function () {
        // Change the main image source to the clicked thumbnail's data-src
        mainImage.style.opacity = '0';
        setTimeout(function () {
          mainImage.src = thumb.getAttribute('src');
          mainImage.style.opacity = '1';
        }, 300);

        // Remove the 'active' class from all thumbnails
        thumbnails.forEach(t => t.classList.remove('active'));

        // Add the 'active' class to the clicked thumbnail
        thumb.classList.add('active');
      });
    });
  });
</script>
<footer class="site-footer border-top">
  <div class="container">
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
      <div class="col-md-12">
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


</body>

</html>