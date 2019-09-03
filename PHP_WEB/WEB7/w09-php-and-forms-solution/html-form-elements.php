<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTML Form Elements</title>
    </head>
    <body>
        <form action="handling-form-elements-in-php.php" method="post">
            Name: <input type="text" name="name"><br>
            Age: <input type="text" name="age"><br>
            
            <br><br><br>
            
            
            Select your gender:<br>
            <input type="radio" name="gender" value="Male"> Male<br>
            <input type="radio" name="gender" value="Female"> Female<br>
            
            <br><br><br>
            
            
            Your Favorite Colors:<br>
            <input type="checkbox" name="colors[]" value="Red"> Red<br>
            <input type="checkbox" name="colors[]" value="Blue"> Blue<br>
            <input type="checkbox" name="colors[]" value="Black"> Black<br>
            <input type="checkbox" name="colors[]" value="Green"> Green<br>
            
            <br><br><br>
            
            
            Select your car:
            <select name="car">
                <option value="-1">Select a Car</option>
                <option value="Toyota">Toyota</option>
                <option value="Mazda">Mazda</option>
                <option value="Honda">Honda</option>
                <option value="BMW">BMW</option>
            </select>
            
            <br><br><br>
            
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
