<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$staticUsername = "user123";
$staticPassword = "12345";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    if ($username == $staticUsername && $password == $staticPassword) {
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie("username", $username, time() + 3600 * 24 * 7);
            setcookie("password", $password, time() + 3600 * 24 * 7);
        } else {
            setcookie("username", "", time() - 3600);
            setcookie("password", "", time() - 3600);
        }

        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

$savedUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : "";
$savedPassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity A - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($error != ""): ?>
    <script>
        alert("<?php echo $error; ?>");
    </script>
<?php endif; ?>

<div class="page-card login-card">
    <div class="login-top">
        <div class="logo">A</div>
        <div class="menu-icon">☰</div>
    </div>

    <h2>Login Account</h2>
    <p>Use the static account to continue.</p>

    <form method="post" action="login.php">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $savedUsername; ?>" required>

        <label>Password</label>
        <input type="password" name="password" value="<?php echo $savedPassword; ?>" required>

        <div class="remember-row">
            <input type="checkbox" name="remember" <?php if ($savedUsername) echo "checked"; ?>>
            <span>Remember Me</span>
        </div>

        <input type="submit" value="Submit">
    </form>

    <p class="bottom-text">
        No account yet? <a href="register.php">Click here to register</a>
    </p>

    <p class="hint">Static account: user123 / 12345</p>
</div>

</body>
</html>