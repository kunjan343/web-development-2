<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim-Horton's Coffee</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>
<body>
<div class="tim-content-block" align="center">
    <img src="images/tim-hortons-logo.png" width="280" alt="tim logo">
    <h2 class="tim-title">Welcome to Tim Horton's!</h2>
    <div class="tim-order-form" align="left">
        <h4>Give us some numbers..</h4>
        <form action="order.php" method="post">
            <table>
                <tr>
                    <td><label for="coffee-cup">Number of Coffee: </label></td>
                    <td><input type="number" id="coffee-cup" style="width: 140px" name="coffee_cups" value="1" min="1"
                               max="10">
                    </td>
                </tr>
                <tr>
                    <td><label for="coffee-size">Size: </label></td>
                    <td>
                        <select id="coffee-size" name="coffee_size">
                            <option value="small">Small</option>
                            <option value="medium" selected>Medium</option>
                            <option value="large">Large</option>
                            <option value="extra_large">Extra Large</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="coffee-cream">How many Creams? </label></td>
                    <td><input type="number" id="coffee-cream" style="width: 140px" name="coffee_cream" min="0" max="6"
                               value="0"></td>
                </tr>
                <tr>
                    <td><label for="coffee-sugar">How many sugars? </label></td>
                    <td><input type="number" id="coffee-sugar" style="width: 140px" name="coffee_sugar" min="0" max="6"
                               value="0"></td>
                </tr>
            </table>
            <input type="submit" value="Order Coffee">
        </form>
    </div>
</div>
<?php
?>
</body>
</html>