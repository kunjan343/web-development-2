<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" href="_css/styles.css">
    </head>
    <body>
       <div id="content">
            <h1>Product Discount Calculator</h1>		
            <form action="display-discount.php" method="post">
				<div id="data">
					<label>Product Description:</label>
					<input type="text" name="prod_desc"><br>
					<label>List Price:</label>
					<input type="text" name="list_price"><br>
					<label>Discount Percent:</label>
					<input type="text" name="discount_percent"> %<br>
				</div>
				
				<div id="buttons">
					<label>&nbsp;</label>
					<input type="submit" value="Calculate Discount"><br>
				</div>
            </form>
        </div>
    </body>
</html>
