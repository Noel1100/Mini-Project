<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>
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

    th,
    td {
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
    <h1>Orders</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Order-id</th>
                <th>User-name</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Amount</th>
                <th>Address ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM orders";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["orderid"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["product_id"] . "</td>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . $row["totalamount"] . "</td>";
                    echo "<td>" . $row["address_id"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>