<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Product Discount Calculator</title>
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
		<pre>
			<?php print_r($_POST); ?>
		</pre>
		
		<hr>
		
        <?php
			// get data from the html file
			$prod_desc = $_REQUEST['prod_desc'];
			$list_price = $_REQUEST['list_price'];
			$discount_percent = $_REQUEST['discount_percent'];

			// calculate the discount
			$discount = $list_price * $discount_percent / 100.0;
			$final_price = $list_price - $discount;

			// apply formatting to the dollar and percent amounts
			$list_price_formatted = "$" . number_format($list_price, 2);
			$discount_percent_formatted = $discount_percent . "%";
			$discount_formatted = "$" . number_format($discount, 2);
			$final_price_formatted = "$" . number_format($final_price, 2);
        ?>
        
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <label>Product Description:</label>
            <span><?php echo $prod_desc; ?></span>
            <br>

            <label>List Price:</label>
            <span><?php echo $list_price_formatted; ?></span>
            <br>

            <label>Standard Discount:</label>
            <span><?php echo $discount_percent_formatted; ?></span>
            <br>

            <label>Discount Amount:</label>
            <span><?php echo $discount_formatted; ?></span>
            <br>

            <label>Discount Price:</label>
            <span><?php echo $final_price_formatted; ?></span>
            <br>
        </div>
    </body>
</html>
