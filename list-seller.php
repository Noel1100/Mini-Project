<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Details</title>
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
    <h1>Seller Details</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Shop Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>City</th>
                <th>District</th>
                <th>State</th>
                <th>Pincode</th>
                <th>Gst Number</th>
                <!-- Add other columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Include your database connection
            include 'config.php';

            // Fetch data from the users table
            $sql = "SELECT * FROM seller";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["shop_name"] . "</td>";
                    echo "<td>" . $row["firstname"] . "</td>";
                    echo "<td>" . $row["lastname"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["city"] . "</td>";
                    echo "<td>" . $row["district"] . "</td>";
                    echo "<td>" . $row["state"] . "</td>";
                    echo "<td>" . $row["postal_code"] . "</td>";
                    echo "<td>" . $row["gst"] . "</td>";
                    // Display other columns as needed
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table>

    <!-- Your HTML, CSS, or JavaScript code can go here -->

</body>
</html>
