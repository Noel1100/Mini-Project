<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <!-- Add your CSS stylesheets or Bootstrap CDN links here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Category ID</th>
                <th>Seller Id</th>
                <th>Product Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Color</th>
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to your database - replace these values with your actual database credentials
            include 'config.php';
$_SESSION[username];
            // Fetch data from the products table
            $sql = "SELECT * FROM products where $S";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["product_id"] . "</td>";
                    echo "<td>" . $row["cat_id"] . "</td>";
                    echo "<td>" . $row["seller_id"] . "</td>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td>" . $row["brand"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["stock"] . "</td>";
                    echo "<td>" . $row["color"] . "</td>";
                    // Display other columns as needed
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No products found</td></tr>";
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table>

    <!-- Your HTML, CSS, or JavaScript code can go here -->

</body>
</html>
