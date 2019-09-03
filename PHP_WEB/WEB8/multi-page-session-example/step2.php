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
$_SESSION['name'] = $_GET['name'];
?>
<form action="step3.php" method="get">
    Age:
    <label>
        <input type="text" name="age">
    </label>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
