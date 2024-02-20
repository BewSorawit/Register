<?php
include("condb.php");

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

// add password sha512
$password = hash('sha512', $password);

$sql = "INSERT INTO member (name, lastname, telephone, username, password, status) VALUES ('$name', '$lastname', '$phone', '$username', '$password','0')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>alert('บันทึกข้อมูลสำเร็จ');</script>";
    echo "<script>window.location='index.php';</script>";
} else {
    echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
    echo "<script>window.location='register.php';</script>";
}

mysqli_close($conn);
?>
