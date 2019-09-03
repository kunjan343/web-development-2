<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$_SESSION['age'] = $_GET['age'];
?>
<form action="step4.php" method="get">
    Favorite Color: <label><input type="text" name="color"></label>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
