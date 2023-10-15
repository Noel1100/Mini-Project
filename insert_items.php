<?php
include 'config.php';

// Start a session
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productname = $_POST['productname'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $brand = $_POST['brand'];

    // Handle product images
    $imageData = array();
    foreach ($_FILES['product_images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['product_images']['name'][$key];
        $targetFilePath = $file_name;
        move_uploaded_file($tmp_name, $targetFilePath);
        $imageData[] = file_get_contents($targetFilePath);
    }

    // Insert data into the database
    foreach ($imageData as $image) {
        $stmt = $conn->prepare("INSERT INTO products (productname, brand, image, price, categoryname, description, stock) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $null = NULL; // Use NULL for BLOB parameter
        $stmt->bind_param('ssbsssi', $productname, $brand, $null, $price, $category, $description, $stock);

        // Assign values to parameters
        $productname = $_POST['productname'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $stmt->send_long_data(2, $image); // Send image data as a stream

        if ($stmt->execute()) {
            // Redirect to avoid form resubmission on refresh with success message
            header('Location: ' . $_SERVER['PHP_SELF'] . '?successMessage=Product+Inserted+Successfully');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    // Store uploaded files in session
    $_SESSION['uploaded_files'] = $_FILES['product_images']['name'];
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        form input,
        form textarea,
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
        }

        ul li:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <h1>Insert Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="productname">Product Name:</label>
        <input type="text" name="productname" id="productname" required><br>

        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required></textarea><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required><br>

        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="" disabled selected>Select a category</option>
            <option value="Mobile Phones and Accessories">Mobile Phones and Accessories</option>
            <option value="Gaming Consoles">Gaming Consoles</option>
            <option value="Cameras and Accessories">Camera and Accessories</option>
            <option value="Audio and Home Entertainment">Audio and Home Entertainment</option>
            <option value="Wearable technology">Wearable Technology</option>
            <option value="Home Appliances">Home Appliances</option>
            <option value="Personal Care Appliances">Personal Care Appliances</option>
            <!-- Add more categories as needed -->
        </select><br>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" required><br>

        <label for="product_images">Images:</label>
        <input type="file" name="product_images[]" id="product_images" accept="image/*" multiple><br><br>

        <input type="submit" value="Insert Product">
    </form>

    <?php if (!empty($_SESSION['uploaded_files'])) : ?>
        <h2>Uploaded Files:</h2>
        <ul>
            <?php foreach ($_SESSION['uploaded_files'] as $file) {
                echo "<li>$file</li>";
            } ?>
        </ul>
    <?php endif; ?>

    <?php
    // Clear uploaded files session data after displaying
    unset($_SESSION['uploaded_files']);
    ?>

    <script>
        // Display a success message if redirected with a parameter
        const urlParams = new URLSearchParams(window.location.search);
        const successMessage = urlParams.get('successMessage');
        if (successMessage) {
            alert(successMessage);
        }
    </script>
</body>
</html>
