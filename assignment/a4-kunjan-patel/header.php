<link rel="stylesheet" href="styles/styles.css">

<h1>Mario Game Store</h1>

<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<ul>
    <li><a href="index.php" <?php echo $page == "index.php" ? "class='active'" : ""; ?>>Home</a></li>
    <li><a href="register.php" <?php echo $page == "register.php" ? "class='active'" : ""; ?>>Register</a></li>
    <li>
        <?php
        if (isset($_SESSION['username'])) {
            $class = $page == "logout.php" ? "class='active'" : "";
            echo "<a href='logout.php' $class>Logout</a>";
        } else {
            $class = $page == "login.php" ? "class='active'" : "";
            echo "<a href='login.php' $class >Login</a>";
        }
        ?>
    </li>
    <li><a href="add_game.php" <?php echo $page == "add_game.php" ? "class='active'" : ""; ?>>Add New Game</a></li>
    <li><a href="list_game.php" <?php echo $page == "list_game.php" ? "class='active'" : ""; ?>>List All Games</a></li>
</ul>
