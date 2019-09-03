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
<a href='index.php'>Home</a> |
<a href='here.php'>Go Here</a> |
<a href='there.php'>Go There</a> |
<a href='logout.php'>Logout</a>
<?php
session_destroy();
?>
<br><br><br>
</body>
</html>
