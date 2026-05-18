<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<style>
    body {
        font-family: Arial, sans-serif;
        background: #ffffff;
        color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .box {
        width: 350px;
        border: 1px solid #000;
        padding: 20px;
        border-radius: 6px;
    }

    .params {
        margin-bottom: 12px;
        padding-bottom: 8px;
        border-bottom: 1px solid #000;
        font-size: 14px;
    }

    .row {
        display: flex;
        justify-content: space-between;
        padding: 6px 0;
    }
</style>
</head>

<body>

<div class="box">

<?php

function calculate($a, $b, $c) {
    $sum = $a + $b + $c;
    $sub = $a - $b - $c;
    $mul = $a * $b * $c;
    $div = $a / $b / $c;

    return [$sum, $sub, $mul, $div];
}

$x = 12;
$y = 4;
$z = 3;

$result = calculate($x, $y, $z);
?>

<div class="params">
    Values: <?php echo "$x, $y, $z"; ?>
</div>

<div class="row">
    <span>Addition</span>
    <span><?php echo $result[0]; ?></span>
</div>

<div class="row">   
    <span>Subtraction</span>
    <span><?php echo $result[1]; ?></span>
</div>

<div class="row">
    <span>Multiplication</span>
    <span><?php echo $result[2]; ?></span>
</div>

<div class="row">
    <span>Division</span>
    <span><?php echo $result[3]; ?></span>
</div>

</div>

</body>
</html>