<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register - User Registration and Login using PHP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">


    <style>
        #wrapper {
            width: 70%;
            margin: 10px auto;
        }

        table, p {
            width: 40%;
            margin: 5px auto;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <?php
    require_once 'header.php';
    ?>

    <h2>Register</h2>

    <form action="register_model.php" method="post">
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username"
                               placeholder="username" required autofocus>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="password" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-group">
                        <label for="passwordMatch">Retype Password</label>
                        <input type="password" name="passwordMatch" class="form-control" id="passwordMatch"
                               placeholder="retype password" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-primary" style="width: 100%" value="Register"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_REQUEST['result'])) {
        if ($_REQUEST['result'] == "userexists") {
            echo "<p class='alert alert-warning'><strong>Duplication!&nbsp;</strong>This username is already taken up.</p>";
        } else if ($_REQUEST['result'] == "mismatch") {
            echo "<p class='alert alert-danger'><strong>Error!&nbsp;</strong>Your password is mismatched with retyped password.</p>";
        } else if ($_REQUEST['result'] == "fail") {
            echo "<p class='alert alert-danger'><strong>Error!&nbsp;</strong>New user was not registered</p>";
        }
    }
    // PHP code to display messages to the user
    ?>
</div>
</body>
</html>
