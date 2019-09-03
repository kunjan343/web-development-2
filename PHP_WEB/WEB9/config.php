<?php
// write the code to connect with the database
$host = 'localhost'; // name of the server, usually localhost
$username = 'patkunja_admin'; // your database username
$password = '?aW#fAeV9KQT'; // your database password
$db_name = 'patkunja_mydb'; // the database name
// Create connection
$conn = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (empty($conn)) {
    die("Connection failed: " . mysqli_connect_error());
}