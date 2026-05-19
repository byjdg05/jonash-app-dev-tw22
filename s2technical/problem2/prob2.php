<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            margin: 30px;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: #ffffff;
        }
        th, td {
            border: 2px solid #999;
            padding: 12px;
            text-align: center;
            font-size: 15px;
        }
        .main-header {
            background-color: #ffffff;
            font-weight: bold;
            font-size: 18px;
        }
        .sub-header {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

function getCubeVolume($s) {
    return $s * $s * $s;
}

function getRectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function getCylinderVolume($r, $h) {
    return 3.14159 * $r * $r * $h;
}

function getConeVolume($r, $h) {
    return (1/3) * 3.14159 * $r * $r * $h;
}

function getSphereVolume($r) {
    return (4/3) * 3.14159 * ($r * $r * $r);
}

// Your unique test values
$side = 5;
$length = 6; $width = 4; $height_prism = 8;
$radius_cyl = 3; $height_cyl = 10;
$radius_cone = 4; $height_cone = 9;
$radius_sphere = 6;
?>

<table>
    <tr>
        <th colspan="3" class="main-header">Volume of Shapes</th>
    </tr>
    <tr class="sub-header">
        <td>Values</td>
        <td>Formula</td>
        <td>Answer</td>
    </tr>

    <tr>
        <td>s = <?php echo $side; ?></td>
        <td>V = s³</td>
        <td><?php echo number_format(getCubeVolume($side), 2); ?></td>
    </tr>

    <tr>
        <td>l = <?php echo $length; ?>, w = <?php echo $width; ?>, h = <?php echo $height_prism; ?></td>
        <td>V = l × w × h</td>
        <td><?php echo number_format(getRectangularPrismVolume($length, $width, $height_prism), 2); ?></td>
    </tr>

    <tr>
        <td>r = <?php echo $radius_cyl; ?>, h = <?php echo $height_cyl; ?></td>
        <td>V = πr²h</td>
        <td><?php echo number_format(getCylinderVolume($radius_cyl, $height_cyl), 2); ?></td>
    </tr>

    <tr>
        <td>r = <?php echo $radius_cone; ?>, h = <?php echo $height_cone; ?></td>
        <td>V = 1/3 πr²h</td>
        <td><?php echo number_format(getConeVolume($radius_cone, $height_cone), 2); ?></td>
    </tr>

    <tr>
        <td>r = <?php echo $radius_sphere; ?></td>
        <td>V = 4/3 πr³</td>
        <td><?php echo number_format(getSphereVolume($radius_sphere), 2); ?></td>
    </tr>
</table>

</body>
</html>