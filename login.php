<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .alert-primary {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .alert-danger {
            background-color: #dc3545;
            color: #fff;
            border-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">

                <div class="alert alert-primary h4 text-center" role="alert">
                    เข้าสู่ระบบ
                </div>

                <!-- Display error message if it exists in the session -->
                <?php
                if (isset($_SESSION["ERROR"])) {
                    echo '<div class="alert alert-danger">' . $_SESSION["ERROR"] . '</div>';
                    unset($_SESSION["ERROR"]); // Clear the error message after displaying
                }
                ?>

                <form action="process_login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="submit" value="เข้าสู่ระบบ" class="btn btn-primary">
                    </div>

                    <p class="text-center">Don't have an account yet? <a href="register.php">Register</a></p>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
