<?php
session_start();
require_once "db_connect.php";

$error = "";

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity B - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($error != ""): ?>
<script>
    alert("<?php echo $error; ?>");
</script>
<?php endif; ?>

<div class="page-card login-card">
    <h2>Log-In Form</h2>
    <p>Login using your registered account.</p>

    <form method="post" action="login.php">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>

    <p class="bottom-text">
        No account yet? <a href="register.php">Register here</a>
    </p>
</div>

</body>
</html>