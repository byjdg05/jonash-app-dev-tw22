<?php
session_start();
$conn = require "db_connect.php";

$error = "";
$success = "";

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
    } else {
        $sql = "INSERT INTO users 
        (first_name, middle_name, last_name, username, password, birthday, email, contact_number)
        VALUES 
        ('$first', '$middle', '$last', '$username', '$password', '$birthday', '$email', '$contact')";

        if (mysqli_query($conn, $sql)) {
            $success = "Registration successful. You can now login.";
        } else {
            $error = "Username already exists or database error.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Activity B - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if ($error != ""): ?>
<script>
    alert("<?php echo $error; ?>");
</script>
<?php endif; ?>

<?php if ($success != ""): ?>
<script>
    alert("<?php echo $success; ?>");
</script>
<?php endif; ?>

<div class="page-card form-card">
    <h2>My Personal Information</h2>
    <p>Register your account and save it to the database.</p>

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

    <p class="bottom-text">
        Already registered? <a href="login.php">Click here to login</a>
    </p>
</div>

</body>
</html>