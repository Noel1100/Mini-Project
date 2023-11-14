<?php
session_start(); // Start the session
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if form was submitted
    $name = $_POST['product_name'];
    $title = $_POST['product_title'];
    $desc = $_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $weight = $_POST['weight'];
    $inthebox = $_POST['inthebox'];
    $connectivity = $_POST['connectivity'];

    // Validate form data (check for empty fields)
    if (empty($name) || empty($title) || empty($desc) || empty($stock) || empty($price) || empty($size) || empty($color) || empty($weight) || empty($inthebox) || empty($connectivity)) {
        echo "All fields are required.";
    } else {
        // Insert property details into the database
        $sql = "INSERT INTO products (product_name, product_title, description, stock, price, size, color, weight, inthebox, connectivity) VALUES ('$name', '$title', '$desc', '$stock', '$price', '$size', '$color', '$weight', '$inthebox','$connectivity')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } else {
            // Get the last inserted property ID
            $proId = $conn->insert_id;

            // Insert image data into the database with the associated property ID
            if (!empty($_FILES['image']['name'][0])) {
                foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                    $file_name = $_FILES['images']['name'][$key];
                    $targetFilePath = $file_name;
                    move_uploaded_file($tmp_name, $targetFilePath);

                    // Insert image name into the database
                    $imageSql = "INSERT INTO product_images (product_id, image) VALUES ('$proId', '$targetFilePath')";
                    if ($conn->query($imageSql) !== TRUE) {
                        echo "Error: " . $imageSql . "<br>" . $conn->error;
                    }
                }
            }

            // Insert additional images into the new columns
            if (!empty($_FILES['image1']['name'][0])) {
                $file_name = $_FILES['image1']['name'][0];
                $targetFilePath = $file_name;
                move_uploaded_file($_FILES['image1']['tmp_name'][0], $targetFilePath);
                $conn->query("UPDATE product_images SET image1 = '$targetFilePath' WHERE product_id = '$proId'");
            }

            if (!empty($_FILES['image2']['name'][0])) {
                $file_name = $_FILES['image2']['name'][0];
                $targetFilePath = $file_name;
                move_uploaded_file($_FILES['image2']['tmp_name'][0], $targetFilePath);
                $conn->query("UPDATE product_images SET image2 = '$targetFilePath' WHERE product_id = '$proId'");
            }

            if (!empty($_FILES['image3']['name'][0])) {
                $file_name = $_FILES['image3']['name'][0];
                $targetFilePath = $file_name;
                move_uploaded_file($_FILES['image3']['tmp_name'][0], $targetFilePath);
                $conn->query("UPDATE product_images SET image3 = '$targetFilePath' WHERE product_id = '$proId'");
            }

            // Set success message in session
            $_SESSION['success_message'] = "Product Inserted Sucessfully";

            // Redirect to the same page after successful form submission
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
    }
    $conn->close();
}

if (isset($_SESSION['success_message'])) {
    echo "<div id='myModal' class='modal'>
            <div class='modal-content'>
                <div style='text-align: center;'>
                    <i class='fas fa-check-circle' style='font-size: 48px; color: #4CAF50;'></i>
                </div>
                <p style='text-align: center;'>" . $_SESSION['success_message'] . "</p>
                <button onclick='closeModal()' style='background-color: #4CAF50; color: white;'>OK</button>
            </div>
          </div>

          <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Show the modal box
                var modal = document.getElementById('myModal');
                modal.style.display = 'block';
                // Remove the message from session
                " . "deleteMessage(); 
            });

            function deleteMessage() {
                // Function to remove the message from session
                fetch('delete_message.php', {
                    method: 'GET',
                })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }

            function closeModal() {
                // Function to close the modal box
                var modal = document.getElementById('myModal');
                modal.style.display = 'none';
            }
          </script>";

    // Remove the success message from the session to avoid displaying it on page refresh
    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Property</title>
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

        /* Custom modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            text-align: center;
            border-radius: 10px;
            /* Added to make the modal box square-shaped */
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <!-- Add Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-4ayA5WUNhz4GNxQ5XiyWJTna7/aB9/ejTp2MhN5pIG/QJT6z8e+25fLvl4CcGb7bKAAStEVpWtd5aQEGm7rpxQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>
        <center>Insert Product</center>
    </h1><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="productname">Product Name:</label>
        <input type="text" name="productname" id="productname" required><br><br>

        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required><br><br>


        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required><br><br>

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
        </select><br><br>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" required><br><br>

        <label for="product_images">Images:</label>
        <input type="file" name="image[]" id="image" accept="image/*" multiple><br><br>

        <input type="file" name="image1[]" id="image1" accept="image/*" multiple><br><br>

        <input type="file" name="image2[]" id="image2" accept="image/*" multiple><br><br>

        <input type="file" name="image3[]" id="image3" accept="image/*" multiple><br><br>

        <input type="submit" value="Insert Product">
    </form>

    <?php if (!empty($_SESSION['uploaded_files'])): ?>
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

    <!-- Modal -->
    <?php if (!empty($successMessage)): ?>
        <!-- Modal -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p>
                    <?php echo $successMessage; ?>
                </p>
                <button class="close" onclick="closeModal()">OK</button>
            </div>
        </div>

        <script>
            // Display the success modal
            const modal = document.getElementById('successModal');
            modal.style.display = 'flex';

            // Close the modal when the user clicks the OK button
            function closeModal() {
                modal.style.display = 'none';
            }
        </script>
    <?php endif; ?>
    </script>
</body>

</html>