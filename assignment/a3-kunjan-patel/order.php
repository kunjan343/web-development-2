<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim-Horton's Coffee</title>
    <link rel="stylesheet" type="text/css" href="styles/order.css">
</head>
<body>

<?php
$validate = true;
$coffeeCups = $_REQUEST['coffee_cups'];
$sugar = $_REQUEST['coffee_sugar'];
$cream = $_REQUEST['coffee_cream'];
$cupSize = $_REQUEST['coffee_size'];

if ($coffeeCups < 1) {
    $validate = false;
} elseif ($sugar < 0) {
    $validate = false;
} elseif ($cream < 0) {
    $validate = false;
}

$width = 80;
$height = 110;
$price = number_format((float)1, 2, '.', '');
if ($cupSize === "medium") {
    $width = 90;
    $height = 120;
    $price = number_format((float)1.5, 2, '.', '');
} elseif ($cupSize === "large") {
    $width = 100;
    $height = 150;
    $price = number_format((float)2, 2, '.', '');
} elseif ($cupSize === "extra_large") {
    $width = 110;
    $height = 160;
    $price = number_format((float)2.5, 2, '.', '');
}

$bill = ($price * $coffeeCups) * 1.13;
?>

<div class="order-content-block" align="center">
    <?php
    if (!$validate) {
        echo "<h2 class='order-error'>Invalid order detail.</h2>";
        echo "<a class='order-return-link' href='index.php'>Back to Order Page</a>";
        return;
    }
    ?>
    <h2 class="order-title">Thanks for your order. Here it is:</h2>
    <?php for ($i = 0; $i < $coffeeCups; $i++) : ?>
        <div class="order-detail" align="left">
            <?php
            echo "<img src='./images/cup.jpg' width='$width' height='$height' alt='coffee_cup'>";
            if ($sugar > 0)
                echo '<img class="order-plus-icon" src="./images/plus.jpg" width="50" height="50" alt="coffee_cup">';
            /* number of sugar */
            for ($j = 0; $j < $sugar; $j++)
                echo '<img src="./images/sugar.jpg" width="50" height="100" alt="coffee_cup">';
            if ($cream > 0)
                echo '<img class="order-plus-icon" src="./images/plus.jpg" width="50" height="50" alt="coffee_cup">';
            /* number of cream */
            for ($j = 0; $j < $cream; $j++)
                echo '<img src="./images/cream.jpg" width="80" height="80" alt="coffee_cup">';
            ?>
        </div>
    <?php endfor ?>
    <div class="order-cost" align="left">Cost: $<?php echo "$price" ?> x <?php echo "$coffeeCups" ?> + tax
        = <?php echo "<b>$$bill</b>" ?></div>
</div>
</body>
</html>