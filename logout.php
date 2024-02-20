<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("location:login.php");
exit(); // Add exit to ensure no further code execution after redirect
?>
