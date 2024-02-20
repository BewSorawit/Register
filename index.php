<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}

$username = $_SESSION["username"];
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$phone = $_SESSION["telephone"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to User</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .welcome-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .welcome-heading {
            color: #007bff;
        }

        .user-info {
            margin-top: 15px;
        }

        .logout-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 welcome-container">

                <h3 class="text-center welcome-heading">Welcome, <?php echo $firstname . ' ' . $lastname; ?>!</h3>

                <div class="user-info text-center">
                    <p>Username: <?php echo $username; ?></p>
                    <p>Phone: <?php echo $phone; ?></p>
                </div>

                <div class="text-center logout-btn">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>