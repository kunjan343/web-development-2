<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Game Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">

    <style>
        #wrapper {
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <?php
    require_once 'header.php';
    ?>

    <h2>Welcome</h2>

    <p>Welcome to your game library.</p>
    <button type="button" onclick="location.href = 'login.php'" class="btn btn-primary">Login</button>
    <button type="button" onclick="location.href = 'register.php'" class="btn btn-primary">Register</button>
</div>
</body>
</html>
