<?php
if (isset($_POST['fname'])) {
    $startTime = time();

    setcookie("fname", $_POST['fname'], time() + 60);
    setcookie("mname", $_POST['mname'], time() + 60);
    setcookie("lname", $_POST['lname'], time() + 60);
    setcookie("start_time", $startTime, time() + 60);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cookie Info</title>
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
            background: rgba(255, 255, 255, 0.75);
            padding: 30px;
            border-radius: 18px;
            width: 360px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e293b;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 8px 0 14px;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            outline: none;
            transition: 0.25s;
        }

        input:focus {
            border-color: #60a5fa;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2);
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #6366f1, #3b82f6);
            color: white;
            font-size: 15px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
        }

        button:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
        }

        button:active {
            transform: scale(0.97);
        }

        button::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: -100%;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: 0.5s;
        }

        button:hover::after {
            left: 100%;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: rgba(248, 250, 252, 0.9);
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            font-size: 14px;
            line-height: 1.6;
            color: #1e293b;
        }

        .result h3 {
            margin-top: 0;
            color: #2563eb;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Cookie Info</h2>

    <form method="POST">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="mname" placeholder="Middle Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>

        <button type="submit">Save Cookies</button>
    </form>

    <div class="result">
        <h3>Output:</h3>

        <?php
        if (isset($_COOKIE['start_time'])) {
            $elapsed = time() - $_COOKIE['start_time'];

            if ($elapsed >= 10 && isset($_COOKIE['fname'])) {
                echo "<b>After 10 seconds:</b><br>";
                echo "First Name: " . $_COOKIE['fname'] . "<br><br>";
            }

            if ($elapsed >= 20 && isset($_COOKIE['mname'])) {
                echo "<b>After 20 seconds:</b><br>";
                echo "Middle Name: " . $_COOKIE['mname'] . "<br><br>";
            }

            if ($elapsed >= 30 && isset($_COOKIE['lname'])) {
                echo "<b>After 30 seconds:</b><br>";
                echo "Last Name: " . $_COOKIE['lname'] . "<br>";
            }

            if ($elapsed < 10) {
                echo "Wait at least 10 seconds and refresh...";
            }
        }
        ?>
    </div>
</div>

</body>
</html>