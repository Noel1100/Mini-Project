<?php
session_start();
error_reporting(0);
include('config.php');

if (empty($_SESSION['login'])) {
    header('location: signin.php'); // Corrected the redirection to the sign-in page
    exit(); // Added an exit to prevent further execution
} else {
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contactno = $_POST['contactno'];
        $query = mysqli_query($con, "UPDATE users SET name='$name', contactno='$contactno' WHERE id='" . $_SESSION['id'] . "'");
        if ($query) {
            echo "<script>alert('Your info has been updated');</script>";
        }
    }

    date_default_timezone_set('Asia/Kolkata'); // Change according to the timezone
}

// Rest of your profile.php content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script type="text/javascript">
        window.history.pushState(null, "", window.location.href);
        window.onpopstate = function () {
            window.history.pushState(null, "", window.location.href);
            window.location.replace("index.php");
        };
    </script>
    <style>
        .card-img-overlay {
            font-size: 20px;
            position: absolute;
            bottom: 80px;
            color: white;
            width: 100%;
            text-align: center;
        }

        .profile-image {
            position: relative;
            display: inline-block;
        }

        .profile-image .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .profile-image:hover .overlay {
            height: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">Welcome back, <?php echo $_SESSION['name']; ?>!</p>
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#logoutModal">Sign Out</button>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Profile</h5>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contactno">Contact Number</label>
                            <input type="text" class="form-control" id="contactno" name="contactno" value="<?php echo $_SESSION['contactno']; ?>">
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="update">Update</button>
                    </form>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Change Password</h5>
                    <form method="post">
                        <div class="form-group">
                            <label for="cpass">Current Password</label>
                            <input type="password" class="form-control" id="cpass" name="cpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass">New Password</label>
                            <input type="password" class="form-control" id="newpass" name="newpass">
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="submit">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <a href="signout.php" class="btn btn-primary">Yes</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
