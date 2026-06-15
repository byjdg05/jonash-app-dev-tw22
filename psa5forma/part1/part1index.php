<!DOCTYPE html>
<html>

<head>
    <title>Personal Info Form</title>
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
            font-weight: 600;
        }

        select, input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            outline: none;
            transition: 0.25s;
        }

        input[type="text"]:focus {
            border-color: #60a5fa;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(96, 165, 250, 0.2);
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 8px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #6366f1, #3b82f6);
            color: white;
            font-size: 15px;
            font-weight: 500;
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
            margin-bottom: 10px;
            font-size: 15px;
            color: #2563eb;
        }

        .method-select {
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

<div class="container">
    <h2>Personal Info</h2>

    <form method="GET" class="method-select">
        <select name="method" onchange="this.form.submit()">
            <option value="GET">Use GET</option>
            <option value="POST" <?php if (isset($_GET['method']) && $_GET['method'] == "POST") echo "selected"; ?>>
                Use POST
            </option>
        </select>
    </form>

    <?php
    $method = isset($_GET['method']) && $_GET['method'] == "POST" ? "POST" : "GET";
    ?>

    <form method="<?php echo $method; ?>">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="mname" placeholder="Middle Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="text" name="dob" placeholder="Date of Birth" required>
        <input type="text" name="address" placeholder="Address" required>

        <button type="submit">Submit</button>
    </form>

    <div class="result">
        <h3>Submitted Data:</h3>

        <?php
        if ($method == "GET" && isset($_GET['fname'])) {
            echo "First Name: " . $_GET['fname'] . "<br>";
            echo "Middle Name: " . $_GET['mname'] . "<br>";
            echo "Last Name: " . $_GET['lname'] . "<br>";
            echo "Date of Birth: " . $_GET['dob'] . "<br>";
            echo "Address: " . $_GET['address'] . "<br>";
        }

        if ($method == "POST" && isset($_POST['fname'])) {
            echo "First Name: " . $_POST['fname'] . "<br>";
            echo "Middle Name: " . $_POST['mname'] . "<br>";
            echo "Last Name: " . $_POST['lname'] . "<br>";
            echo "Date of Birth: " . $_POST['dob'] . "<br>";
            echo "Address: " . $_POST['address'] . "<br>";
        }
        ?>
    </div>
</div>

</body>
</html>
``