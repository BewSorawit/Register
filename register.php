<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 form-container">

                <div class="alert alert-primary h4 text-center" role="alert">
                    สมัครสมาขิก
                </div>

                <form action="insert_register.php" method="post">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">ชื่อ</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">นามสุกล</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">เบอร์โทรศัทร์</label>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" maxlength="15" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" maxlength="15" class="form-control" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
                        <input type="reset" name="cancel" value="ยกเลิก" class="btn btn-secondary">
                    </div>

                    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>