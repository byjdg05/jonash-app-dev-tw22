<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #dbeafe, #f0f9ff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            backdrop-filter: blur(12px);
            background: rgba(255,255,255,0.75);
            padding: 30px;
            border-radius: 18px;
            width: 360px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e293b;
        }

        .color-item {
            display: flex;
            align-items: center;
            padding: 10px;
            margin: 10px 0;
            border-radius: 10px;
            background: #f1f5f9;
        }

        .color-box {
            width: 25px;
            height: 25px;
            border-radius: 6px;
            margin-right: 10px;
            border: 1px solid #ccc;
        }

        .back-btn {
            margin-top: 15px;
            display: block;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            background: #3b82f6;
            color: white;
        }

        .back-btn:hover {
            background: #2563eb;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>My Favorite Colors</h2>

<?php
if (isset($_SESSION['colors'])) {
    foreach ($_SESSION['colors'] as $index => $color) {

        echo "
        <div class='color-item' style='border-left: 6px solid $color;'>
            <div class='color-box' style='background: $color;'></div>
            Favorite Color " . ($index+1) . ": $color
        </div>
        ";
    }
} else {
    echo "No colors found.";
}
?>

    <a href="favoritecolor.php" class="back-btn">← Back</a>
</div>

</body>
</html>
``