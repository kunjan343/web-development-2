<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <label>
        <input type="radio" name="gender" value="Female">
    </label> Female
    <label>
        <input type="radio" name="gender" value="Male">
    </label> Male
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_REQUEST["submit"])) {
    $gender = $_REQUEST['gender'];
    echo "$gender";
    if (empty($gender)) {
        echo "NO radio button is selected";
        return;
    }
    echo "<p>Gender: $gender</p>";
}
?>
</body>
</html>