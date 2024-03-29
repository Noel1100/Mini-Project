<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['productname'];
    $title = $_POST['product_title'];
    $highlights = $_POST['highlights'];
    $desc = $_POST['description'];
    $stock = $_POST['stock'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $weight = $_POST['weight'];
    $inthebox = $_POST['inthebox'];
    $connectivity = $_POST['connectivity'];
    $category = $_POST['category']; 
    if (empty($name) || empty($title) || empty($highlights) || empty($desc) || empty($stock) || empty($brand) || empty($price) || empty($size) || empty($color) || empty($weight) || empty($inthebox) || empty($connectivity) || empty($category)) {
        echo "All fields are required.";
    } else {
        $sql = "INSERT INTO products (product_name, product_title, highlights, description, stock, brand, price, size, color, weight, inthebox, connectivity, cat_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("ssssssisssiss", $name, $title, $highlights, $desc, $stock, $brand, $price, $size, $color, $weight, $inthebox, $connectivity, $category);

            if ($stmt->execute()) {
                $proId = $conn->insert_id;
    
            if (!empty($_FILES['image']['name'])) {
                $imageSql = "INSERT INTO product_images (product_id, image1) VALUES (?, ?)";
                $imageStmt = $conn->prepare($imageSql);
            
                if ($imageStmt) {
                    foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                        $file_name = $_FILES['image']['name'][$key];
                        $targetFilePath = $file_name;
                        $imageStmt->bind_param("is", $proId, $targetFilePath);
                        if ($imageStmt->execute()) {
                            move_uploaded_file($tmp_name, $targetFilePath);
                        } else {
                            echo "Error inserting image: " . $imageStmt->error;
                        }
                    }
                    $imageStmt->close();
                } else {
                    echo "Error preparing image statement: " . $conn->error;
                }
            }
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

    if (!empty($_FILES['image4']['name'][0])) {
        $file_name = $_FILES['image4']['name'][0];
        $targetFilePath = $file_name;
        move_uploaded_file($_FILES['image4']['tmp_name'][0], $targetFilePath);
        $conn->query("UPDATE product_images SET image4 = '$targetFilePath' WHERE product_id = '$proId'");
    }

    $_SESSION['success_message'] = "Product Inserted Successfully";
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
    }
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

    unset($_SESSION['success_message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insert Products</title>
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
        form select,form textarea {
            font-family: 'Arial', sans-serif;
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

        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: url('https://i.pinimg.com/originals/ff/26/d5/ff26d5a8cb3416fcf8ac05224acb858c.png') no-repeat center center fixed;
            background-size: cover;
        }

        h1 {
            color: #7971ea;
            margin-top: 50px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        select,
        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #7971ea;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5c539a;
        }
    </style>

<style>
    input[type="text"],
    input[type="number"],
    #category,
    #product_title,
    #description,
    #highlights,
    #inthebox,
    #connectivity,
    select {
        border: 2px solid blue;
        padding: 8px;
    }

    input[type="file"] {
        border: 2px solid blue;
        padding: 8px;
        display: block; 
        margin-bottom: 10px; 
    }
</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-4ayA5WUNhz4GNxQ5XiyWJTna7/aB9/ejTp2MhN5pIG/QJT6z8e+25fLvl4CcGb7bKAAStEVpWtd5aQEGm7rpxQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 style="color: white">
        <center>Insert Product</center>
    </h1><br>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="" disabled selected>Select a category</option>
            <?php
            include 'config.php'; 
            
            $sql = "SELECT cat_id, category_name FROM categories";
            $result = $conn->query($sql);
            if ($result === false) {
                trigger_error('Error: ' . $conn->error, E_USER_ERROR);
            }

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['cat_id'] . "'>" . $row['category_name'] . "</option>";
                }
            } else {
                echo "<option value=''>No categories found</option>";
            }

            $conn->close();
            ?>
        </select><br><br>
        <label for="productname">Product Name:</label>
        <input type="text" name="productname" id="productname" required><br><br>

        <label for="product_title">Title of the product</label>
        <textarea type="text" name="product_title" id="product_title" required></textarea><br><br>

        <label for="description">Product Description:</label>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="highlights">Product Highlights:</label>
        <textarea name="highlights" id="highlights" required></textarea><br><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required><br><br>


        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required><br><br>

        <label for="brand">Brand:</label>
        <input type="text" name="brand" id="brand" required><br><br>

        <label for="size">Size:</label>
        <input type="text" name="size" id="size" required><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required><br><br>

        <label for="weight">Weight:</label>
        <input type="text" name="weight" id="weight" required><br><br>

        <label for="inthebox">In the Box</label>
        <textarea type="text" name="inthebox" id="inthebox" required></textarea><br><br>

        <label for="connectivity">Connectivity</label>
        <textarea type="text" name="connectivity" id="connectivity" required></textarea><br><br>

        <label for="product_images">Images:</label>
        <input type="file" name="image[]" id="image" accept="image/*" multiple><br><br>

        <input type="file" name="image1[]" id="image1" accept="image/*" multiple><br><br>

        <input type="file" name="image2[]" id="image2" accept="image/*" multiple><br><br>

        <input type="file" name="image3[]" id="image3" accept="image/*" multiple><br><br>

        <input type="submit" value="Insert Product" style="background-color: #7971ea; color: white;">
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
    unset($_SESSION['uploaded_files']);
    ?>

    <?php if (!empty($successMessage)): ?>
   
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p>
                    <?php echo $successMessage; ?>
                </p>
                <button class="close" onclick="closeModal()">OK</button>
            </div>
        </div>

        <script>
            const modal = document.getElementById('successModal');
            modal.style.display = 'flex';

            function closeModal() {
                modal.style.display = 'none';
            }
        </script>
    <?php endif; ?>
    </script>
</body>

</html>