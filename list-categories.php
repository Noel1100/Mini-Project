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
        #img {
    display: block;
    margin: auto;
    width: auto;
    height: 200px;
}

    </style>
</head>
<body>
    <h1>Product Details</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
        <?php
    include 'config.php';
    $sql = "SELECT * FROM categories"; // Corrected SQL query

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["cat_id"] . "</td>";
            echo "<td>" . $row["category_name"] . "</td>";
            echo "</tr>"; 
        }
    } else {
        echo "<tr><td colspan='2'>No categories found</td></tr>"; 
    }
    $conn->close();
?>


        </tbody>
    </table>

    <!-- Your HTML, CSS, or JavaScript code can go here -->

</body>
</html>
