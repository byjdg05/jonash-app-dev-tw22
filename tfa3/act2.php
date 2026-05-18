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

    .array {
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
$numbers = [10,20,30,40,50,60,70,80,100];

$sum = array_sum($numbers);

$sub = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $sub -= $numbers[$i];
}

$product = 1;
foreach ($numbers as $num) {
    $product *= $num;
}

$div = $numbers[0];
for ($i = 1; $i < count($numbers); $i++) {
    $div /= $numbers[$i];
}
?>

<div class="array">
    Array: <?php echo implode(", ", $numbers); ?>
</div>

<div class="row">
    <span>Addition</span>
    <span><?php echo $sum; ?></span>
</div>

<div class="row">
    <span>Subtraction</span>
    <span><?php echo $sub; ?></span>
</div>

<div class="row">
    <span>Multiplication</span>
    <span><?php echo $product; ?></span>
</div>

<div class="row">
    <span>Division</span>
    <span><?php echo $div; ?></span>
</div>

</div>

</body>
</html>