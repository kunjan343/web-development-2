<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Response to the HTML Form Elements</title>
    </head>
    <body>
		<pre>
			<?php print_r($_POST); ?>
		</pre>
		
		<hr>
		
        <?php
            $name = $_REQUEST["name"];
            $age = $_REQUEST["age"];
            
            // check if name field is empty
            //if ($name == "")
            if (empty($name))
                echo "Name field is required<br>";
            // check length of text in name field
            else if (strlen ($name) <= 3)
                echo "Name must be at least 3 chars long<br>";
            else
                echo "Welcome $name <br>";
            
            
            echo "Your age is " . $_REQUEST["age"] . "<br>";
            
            echo "<br><br><br>";
            
            

            $gender = $_REQUEST["gender"];
            
            // check if gender is selected
            if (empty($gender))
                echo "Please select your gender<br>";
            else
                echo "Gender: $gender<br>";
            
            echo "<br><br><br>";

            
            $colors = $_REQUEST["colors"];
            
            // check if any color is selected
            if (empty($colors))
                echo "Please select your favorite colors<br>";
            else
            {
                echo "Favorite Colors: ";
                foreach($colors as $i)
                    echo $i . " ";
				
				// OR
				//for ($i=0; $i<sizeof($colors); $i++)
				//	echo $colors[$i] . " ";
            }
            
            
            echo "<br><br><br>";

            
            $car = $_REQUEST["car"];
            
            // check if any car is selected
            if ($car == "-1")
                echo "Please select your car<br>";
            else
                echo "$car is selected<br>"; 
        ?>
    </body>
</html>
