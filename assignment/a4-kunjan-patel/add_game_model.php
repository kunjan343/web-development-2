<?php

ob_start(); // to avoid 'headers already sent...' warning

require_once 'config.php';

$gameName = $_REQUEST['gameName'];
$gamePrice = $_REQUEST['gamePrice'];

// check if the game exist
$query = "Select gameName from tblGames where gameName = '$gameName';";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) >= 1) {
    header('location:add_game.php?result=gameexists');
} else {
    // insert the user info to the database
    $query = "Insert into tblGames (gameName, gamePrice) values ('$gameName', '$gamePrice')";
    $result = mysqli_query($conn, $query);
    if ($result == 1) {
        header('location:list_game.php');
    } else {
        header('location:add_game.php?result=fail');
    }
}
