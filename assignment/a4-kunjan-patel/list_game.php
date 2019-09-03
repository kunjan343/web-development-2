<?php
require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Game Library</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">


    <style>
        #wrapper {
            width: 70%;
            margin: auto;
        }

        .game-list {
            margin: auto;
            width: 50%;
        }

        table {
            margin-top: 15px;
            background-color: #FFFFFF;
        }
    </style>
</head>
<body>
<div id="wrapper">

    <?php
    require_once 'header.php';

    ob_start(); // to avoid 'headers already sent...' warning

    require_once 'config.php';

    $search = $_REQUEST['search'] == "" ? "" : $_REQUEST['search'];
    $search = "%" . $search . "%";

    // check if the game exist
    $query = "Select * from tblGames where gameName like '$search';";
    $result = mysqli_query($conn, $query);
    ?>

    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
    <form action="list_game.php" method="post" class="game-list">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." id="search" name="search" autofocus>
            <span class="input-group-btn"><input type="submit" value="Search" class="btn btn-primary"/></span>
        </div>
        <?php
        if (mysqli_num_rows($result) < 1) {
            echo "<p class='text-danger'>You dont have any game in your library.</p>";
            return;
        }
        echo "<table class='table table-striped'><tr><th>Game</th><th>Price</th></tr>";
        while ($row = $result->fetch_assoc()) {
            // ;
            $name = $row["gameName"];
            $price = $row["gamePrice"];
            echo "<tr><td>$name</td><td>$price</td></tr>";
        }
        echo "</table>"
        ?>
    </form>
</div>
</body>
</html>
