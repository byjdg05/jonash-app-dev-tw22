<?php
session_start();

if (isset($_POST['submit'])) {
    $_SESSION['colors'] = [
        $_POST['c1'],
        $_POST['c2'],
        $_POST['c3'],
        $_POST['c4'],
        $_POST['c5']
    ];

    header("Location: resultscolor.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
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

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            outline: none;
        }

        input:focus {
            border-color: #60a5fa;
            background: #fff;
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 10px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #6366f1, #3b82f6);
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99,102,241,0.4);
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Favorite Colors 🎨</h2>

    <form method="POST">
        <input type="text" name="c1" placeholder="Favorite Color 1 (e.g. red or #ff0000)" required>
        <input type="text" name="c2" placeholder="Favorite Color 2" required>
        <input type="text" name="c3" placeholder="Favorite Color 3" required>
        <input type="text" name="c4" placeholder="Favorite Color 4" required>
        <input type="text" name="c5" placeholder="Favorite Color 5" required>

        <button type="submit" name="submit">Send Colors</button>
    </form>
</div>

</body>
</html>