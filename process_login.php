<?php
session_start();
include("condb.php");

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = hash('sha512', $_POST['password']);

$sql = "SELECT * FROM member WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password']; // Fetch the hashed password from the database
    $status = $row['status'];

    if (hash_equals($hashedPassword, $password)) {
        $_SESSION["username"] = $row['username'];
        $_SESSION["firstname"] = $row['name'];
        $_SESSION["lastname"] = $row['lastname'];
        $_SESSION["telephone"] = $row['telephone'];

        if ($status == '0') {
            header("location: index.php");
            exit();
        } else if ($status == '1') {
            header("location: admin.php");
            exit();
        }
    } else {
        $_SESSION["ERROR"] = "<p>Your username or password is incorrect</p>";
        header("location: login.php");
        exit();
    }
} else {
    $_SESSION["ERROR"] = "<p>Your username or password is incorrect</p>";
    header("location: login.php");
    exit();
}
