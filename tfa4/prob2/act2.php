<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FA4 - Activity 2: String Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
            margin: 40px;
        }
        table {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #2a2a2a;
        }
        th, td {
            border: 2px solid #555;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #333;
            font-weight: bold;
        }
        .main-header {
            font-size: 1.5rem;
            background-color: #222;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">Formative Assessment 4 - Activity 2</h1>
    <p style="text-align: center; color: #aaa; margin-bottom: 30px;">Creation of String Functions in PHP</p>

    <table>
        <tr>
            <th colspan="6" class="main-header">List of names</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a"</th>
            <th>Reverse name</th>
        </tr>

        <?php
        $names = [
            "chrisa", "peter parker", "bruce wayne", "tony stark", "luke skywalker",
            "harry potter", "clark kent", "selina kyle", "barry allen", "diana prince",
            "wanda maximoff", "steve rogers", "natasha romanoff", "bruce banner", "arthur curry",
            "hal jordan", "barry allen", "oliver queen", "matt murdock", "gwen stacy"
        ];

        foreach ($names as $name) {
            
            $length = strlen($name);

            $uppercaseFirst = ucfirst($name);

            $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $vowelReplace = str_replace($vowels, '@', $name);

            $pos = strpos($name, 'a');
            $positionDisplay = ($pos === false) ? "Not Found" : $pos;

            $reversed = strrev($name);

            echo "<tr>";
            echo "<td>" . htmlspecialchars($name) . "</td>";
            echo "<td>" . $length . "</td>";
            echo "<td>" . htmlspecialchars($uppercaseFirst) . "</td>";
            echo "<td>" . htmlspecialchars($vowelReplace) . "</td>";
            echo "<td>" . $positionDisplay . "</td>";
            echo "<td>" . htmlspecialchars($reversed) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>