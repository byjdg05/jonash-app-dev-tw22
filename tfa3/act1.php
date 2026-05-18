<?php

$people = [
    ["name" => "Romar Lising", "image" => "act1images/Romar.jpg", "age" => 22, "birthday" => "2006-07-24", "contact" => "09123456789"],
    ["name" => "Aerick Alba", "image" => "act1images/Alba.jpg", "age" => 20, "birthday" => "2005-08-22", "contact" => "09112233445"],
    ["name" => "Jz Cordero", "image" => "act1images/JZ.png", "age" => 24, "birthday" => "2005-02-19", "contact" => "09234567890"],
    ["name" => "Railey Reyes", "image" => "act1images/Railey.jpg", "age" => 21, "birthday" => "2005-06-15", "contact" => "09345678901"],
    ["name" => "Jonash De Guia", "image" => "act1images/jonash.webp", "age" => 23, "birthday" => "2005-12-13", "contact" => "09456789012"],
    ["name" => "Ozzy Florendo", "image" => "act1images/ozzy.jpg", "age" => 25, "birthday" => "1999-06-15", "contact" => "09567890123"],
    ["name" => "Marcus Dylan", "image" => "act1images/Dylan.jpg", "age" => 22, "birthday" => "2002-02-10", "contact" => "09678901234"],
    ["name" => "Sana Minatozaki", "image" => "act1images/sana.jpeg", "age" => 20, "birthday" => "2004-08-08", "contact" => "09789012345"],
    ["name" => "Brez Scale", "image" => "act1images/brez.jpg", "age" => 23, "birthday" => "2001-03-03", "contact" => "09890123456"],
    ["name" => "Tito Mikee", "image" => "act1images/mikee.jpg", "age" => 26, "birthday" => "1998-12-25", "contact" => "09901234567"]
];

usort($people, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html>
<head>
    <title>People Directory</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: normal;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            border-bottom: 2px solid #333;
            padding: 10px;
            text-align: left;
            font-size: 14px;
        }

        td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
        }

        tr:hover {
            background: #f9f9f9;
        }

        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
        }

        .number {
            width: 40px;
        }

        .center {
            text-align: center;
        }
    </style>
</head>

<body>

<h2>People Directory</h2>

<table>
    <tr>
        <th class="number">#</th>
        <th>Name</th>
        <th class="center">Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact</th>
    </tr>

    <?php
    $no = 1;
    foreach ($people as $person) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$person['name']."</td>";
        echo "<td class='center'><img src='".$person['image']."' alt='Image'></td>";
        echo "<td>".$person['age']."</td>";
        echo "<td>".$person['birthday']."</td>";
        echo "<td>".$person['contact']."</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>