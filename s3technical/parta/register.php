<?php
session_start();

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    header("Location: home.php");
    exit();
}

$error = "";
$showResult = false;

$first = "";
$middle = "";
$last = "";
$username = "";
$password = "";
$birthday = "";
$email = "";
$contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first_name'];
    $middle = $_POST['middle_name'];
    $last = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];

    if ($password !== $confirm) {
        $error = "Password and confirm password are not the same.";
        $showResult = false;
    } else {
        $showResult = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity A - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($error != ""): ?>
    <script>
        alert("<?php echo $error; ?>");
    </script>
<?php endif; ?>

<div class="page-card form-card">
    <h2>My Personal Information</h2>
    <p>Fill out the form below.</p>

    <form method="post" action="register.php">
        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Middle Name</label>
        <input type="text" name="middle_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Birthday</label>
        <input type="text" name="birthday" placeholder="January 30 1993" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact_number" required>

        <input type="submit" value="Submit">
    </form>

    <?php if ($showResult): ?>
        <div class="result-box">
            <h3>Registration Result</h3>

            <p><b>Full Name:</b> <?php echo "$first $middle $last"; ?></p>
            <p><b>Username:</b> <?php echo $username; ?></p>
            <p><b>Password:</b> <?php echo $password; ?></p>
            <p><b>Birthday:</b> <?php echo $birthday; ?></p>
            <p><b>Email:</b> <?php echo $email; ?></p>
            <p><b>Contact Number:</b> <?php echo $contact; ?></p>
        </div>
    <?php endif; ?>

    <p class="bottom-text">
        Already have an account? <a href="login.php">Click here to login</a>
    </p>
</div>

</body>
</html>