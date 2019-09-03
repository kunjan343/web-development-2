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
$name = $_SESSION['name'];
$age = $_SESSION['age'];
$color = $_GET['color'];

echo "Hey $name, your age is $age and your favorite color is $color";
?>
</body>
</html>
