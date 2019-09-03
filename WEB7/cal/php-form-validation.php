<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Validation with PHP</title>
        <style>
            .error { color:red; }
        </style>
    </head>
    <body>
        <?php
            // validation code
        ?>
        
        <h1>PHP Form Validation Example</h1>
        <p class="error">* required fields</p>
        
        <form action="" method="post">
            Name: <input type="text" name="name">
            <span class="error">*</span><br><br>
            
            Email: <input type="text" name="email">
            <span class="error">*</span><br><br>
            
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            
            Gender:
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Male"> Male
            <span class="error">*</span><br><br>
            
            <input type="submit" value="Submit">
        </form>
		
		<h2>Your Input</h2>
		
		<?php
			// display output
		?>
    </body>
</html>
