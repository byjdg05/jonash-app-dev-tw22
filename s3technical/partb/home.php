<?php
session_start();
$conn = require "db_connect.php";

if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $reenter = $_POST['reenter_password'];

    if ($current != $user['password']) {
        $message = "Current password is not the same with the old password.";
    } elseif ($new != $reenter) {
        $message = "New password and Re-Enter new password should be the same.";
    } else {
        $update = "UPDATE users SET password='$new' WHERE id='$user_id'";
        mysqli_query($conn, $update);

        $message = "Password successfully reset.";

        $sql = "SELECT * FROM users WHERE id='$user_id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity B - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($message != ""): ?>
<script>
    alert("<?php echo $message; ?>");
</script>
<?php endif; ?>

<div class="page-card form-card">
    <div class="top-link">
        <a href="logout.php">Log-out</a>
    </div>

    <h2>User Information Form</h2>

    <div class="info-box">
        <p><b>Welcome:</b> <?php echo $user['first_name'] . " " . $user['middle_name'] . " " . $user['last_name']; ?></p>
        <p><b>Birthday:</b> <?php echo $user['birthday']; ?></p>

        <h3>Contact Details</h3>
        <p><b>Email:</b> <?php echo $user['email']; ?></p>
        <p><b>Contact:</b> <?php echo $user['contact_number']; ?></p>
    </div>

    <hr>

    <h3>Reset Password</h3>

    <form method="post" action="home.php">
        <label>Enter Current Password</label>
        <input type="password" name="current_password" required>

        <label>Enter New Password</label>
        <input type="password" name="new_password" required>

        <label>Re-Enter New Password</label>
        <input type="password" name="reenter_password" required>

        <input type="submit" value="Reset Password">
    </form>

    <p class="footer">© De Guia Tech 3</p>
</div>

</body>
</html>