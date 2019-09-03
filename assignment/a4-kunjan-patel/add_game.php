<?php
require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - User Registration and Login using PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">

    <style>
        #wrapper {
            width: 70%;
            margin: auto;
        }

        table, p {
            width: 40%;
            margin: auto;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <?php
    // include header file here
    require_once 'header.php';
    ?>

    <h2 class="text-info">Add new game in your library</h2>

    <form action="add_game_model.php" method="post">
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="gameName">Game Name</label>
                        <input type="text" name="gameName" class="form-control" id="gameName"
                               placeholder="Game Name" required autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="gamePrice">Game Price</label>
                        <input type="number" name="gamePrice" class="form-control" id="gamePrice"
                               placeholder="Game Price" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-success" style="width: 100%" value="Add Game"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_REQUEST['result'])) {
        if ($_REQUEST['result'] == "gameexists") {
            echo "<p class='alert alert-warning'><strong>Duplication!&nbsp;</strong>This game is already exist in library.</p>";
        } else if ($_REQUEST['result'] == "success") {
            echo "<p class='text-success'>Game successfully added in library</p>";
            header('location:list_game.php');
        } else if ($_REQUEST['result'] == "fail") {
            echo "<p class='alert alert-danger'><strong>Error!&nbsp;</strong>Fail to add game in your library</p>";
        }
    }
    ?>
</div>
</body>
</html>
