<?php

ob_start(); // to avoid 'headers already sent...' warning

require_once 'config.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$passwordMatch = $_REQUEST['passwordMatch'];

if ($password != $passwordMatch) {
    header('location:register.php?result=mismatch');
    return;
}

// encrypt the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// check if the username exists
$query = "Select username from tblUsers where username = '$username';";
$result = mysqli_query($conn, $query);
// if a row was fetched, username exists
if (mysqli_num_rows($result) == 1) {
// redirect to register.php page
    header('location:register.php?result=userexists');
} else {
    // insert the user info to the database
    $query = "Insert into tblUsers (username, password) values ('$username', '$hashed_password')";
    $result = mysqli_query($conn, $query);
    if ($result == 1) {
        header('location:login.php');
    } else {
        header('location:register.php?result=fail');
    }
}
