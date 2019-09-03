<?php
// write PHP code that checks if a session exists
// start the session
session_start();
// if the session doesn't exist
if (!isset($_SESSION['username'])) {
// redirect back to login page
    header('location:login.php');
}