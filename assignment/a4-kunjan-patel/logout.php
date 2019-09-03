<?php
// write your code here
session_start();

session_destroy();
header('location:login.php');
