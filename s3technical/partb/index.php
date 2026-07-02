<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity B - Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-card welcome-card">
    <h2>Activity B</h2>
    <p>Please login or register to continue.</p>

    <div class="button-row">
        <a href="login.php" class="btn btn-blue">Login</a>
        <a href="register.php" class="btn btn-green">Register</a>
    </div>
</div>

</body>
</html>