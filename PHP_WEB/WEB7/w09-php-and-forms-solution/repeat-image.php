<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Repeat Image in PHP</title>
    </head>
    <body>
        <form action="" method="post">
            Enter a number for the flower image to repeat:
            <input type="number" name="number" min="1" value="1">
            <input type="submit" name="submit" value="Display Flower">
            
            <br><br><br>
        </form>
        <?php
            if (isset($_REQUEST['submit']))
            {
                $number = $_REQUEST['number'];
                
                for ($i=1; $i<=$number; $i++)
                {
                    echo "<img src='_images/flower.png' alt='flower image'>";
                }
            }
        ?>
    </body>
</html>
