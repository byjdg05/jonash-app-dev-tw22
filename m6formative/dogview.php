<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dog_registry";

$conn = mysqli_connect($host, $user, $password, $database);

$search = "";
$total = 0;
$result = false;
$error = "";

if (!$conn) {
    $error = "Database connection failed. Please make sure MySQL is running and the dog_registry database exists.";
} else {
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM dogs WHERE name LIKE '%$search%' ORDER BY id ASC";
    } else {
        $sql = "SELECT * FROM dogs ORDER BY id ASC";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $total = mysqli_num_rows($result);
    } else {
        $error = "Unable to retrieve dog records.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Dogs</title>
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
    <h1 class="page-title">Registered Dogs</h1>

    <form method="GET" action="" class="search-box">
        <input type="text" name="search" placeholder="Search dog by name" value="<?php echo $search; ?>">
        <button type="submit" class="btn">Search</button>
    </form>

    <?php
    if ($error != "") {
        echo "<p class='message error-message'>$error</p>";
    } else {
        echo "<p class='total'>Total Registered Dogs: $total</p>";
    }
    ?>

    <div class="dog-grid">
        <?php
        if ($result && $total > 0) {
            $number = 1;

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='dog-card'>";
                echo "<h2>Dog #" . $number . "</h2>";
                echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
                echo "<p><strong>Breed:</strong> " . $row['breed'] . "</p>";
                echo "<p><strong>Age:</strong> " . $row['age'] . "</p>";
                echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
                echo "<p><strong>Color:</strong> " . $row['color'] . "</p>";
                echo "<p><strong>Height:</strong> " . $row['height'] . "</p>";
                echo "<p><strong>Weight:</strong> " . $row['weight'] . "</p>";
                echo "</div>";

                $number++;
            }
        } else if ($error == "") {
            echo "<p class='no-record'>No dog records found.</p>";
        }
        ?>
    </div>
</main>

<footer>
    <p>© 2026 Dog Registry System</p>
</footer>

</body>
</html>