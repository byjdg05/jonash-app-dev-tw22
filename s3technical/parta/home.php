<?php
session_start();

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity A - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-card welcome-card">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You have successfully logged in.</p>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>