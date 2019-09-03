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
// echo session_id();

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count'] += 1;
}
if ($_SESSION['count'] == 20) {
    $_SESSION['count'] = 1;
} elseif ($_SESSION['count'] % 5 == 0) {
    echo "You reached milestone";
} else {
    echo $_SESSION['count'];
}
?>
</body>
</html>
