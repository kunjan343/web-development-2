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
    // include header file here
    require_once 'header.php';
    ?>

    <h2>Login</h2>

    <form action="login_model.php" method="post">
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
                    <input type="submit" class="btn btn-primary" style="width: 100%" value="Login"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    // PHP code to display the message back to the user
    if (isset($_REQUEST['result'])) {
        if ($_REQUEST['result'] == "fail") {
            echo "<p class='alert alert-danger'><strong>Error!&nbsp;</strong>Either username or password is incorrect.</p>";
        }
    }
    ?>
</div>
</body>
</html>
