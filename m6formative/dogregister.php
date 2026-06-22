<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dog_registry";

$conn = mysqli_connect($host, $user, $password, $database);

$message = "";

if (!$conn) {
    $message = "Database connection failed. Please make sure MySQL is running and the dog_registry database exists.";
} else {
    if (isset($_POST['save'])) {
        $name = $_POST['name'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $color = $_POST['color'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
                VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

        if (mysqli_query($conn, $sql)) {
            $message = "Dog information saved successfully!";
        } else {
            $message = "Unable to save dog information.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Dog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <h2 class="logo">Dog Registry</h2>

    <nav>
        <a href="index.php">Home</a>
        <a href="dogregister.php">Register Dog</a>
        <a href="dogview.php">View Dogs</a>
    </nav>
</header>

<main class="page">
    <div class="form-card">
        <h1>Dog Registration Form</h1>
        <p class="subtitle">Enter the dog information below.</p>

        <?php
        if ($message != "") {
            echo "<p class='message'>$message</p>";
        }
        ?>

        <form method="POST" action="">
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Breed</label>
            <input type="text" name="breed" required>

            <label>Age</label>
            <input type="text" name="age" placeholder="Example: 2 years old" required>

            <label>Address</label>
            <input type="text" name="address" required>

            <label>Color</label>
            <input type="text" name="color" required>

            <label>Height</label>
            <input type="text" name="height" placeholder="Example: 2 ft" required>

            <label>Weight</label>
            <input type="text" name="weight" placeholder="Example: 5 kilos" required>

            <button type="submit" name="save" class="btn full-btn">Save</button>
        </form>
    </div>
</main>

<footer>
    <p>© 2026 Dog Registry System</p>
</footer>

</body>
</html>