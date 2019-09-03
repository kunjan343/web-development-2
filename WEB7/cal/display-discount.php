<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="_css/styles.css">
</head>
<body>
<?php
// your php code goes here
$prod_desc = $_REQUEST["prod_desc"];
$list_price = $_REQUEST["list_price"];
$discount_percent = $_REQUEST["discount_percent"];

// price count
$discount = $list_price * $discount_percent / 100.0;
$final_price = $list_price + $discount;

// formatted values
$list_price_formatted = "$" . number_format($list_price, 2);
$discount_percent_formatted = $discount_percent . "%";
$discount_formatted = "$" . number_format($discount, 2);
$final_price_formatted = "$" . number_format($final_price, 2);
?>

<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description:</label>
    <span><?php echo "$prod_desc"// display the product description here ?></span>
    <br>

    <label>List Price:</label>
    <span><?php echo "$list_price_formatted"// display the list price here ?></span>
    <br>

    <label>Standard Discount:</label>
    <span><?php echo "$discount_percent_formatted"// display the standard discount here ?></span>
    <br>

    <label>Discount Amount:</label>
    <span><?php echo "$discount_formatted"// display the discount amount here ?></span>
    <br>

    <label>Discount Price:</label>
    <span><?php echo "$final_price_formatted"// display the discount price here ?></span>
    <br>
</div>
</body>
</html>
