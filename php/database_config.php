<?php
// Database configuration details
$db_host = '172.31.22.43';
$db_user = 'Manas200542367';
$db_password = 'TwdjtcnUA_';
$db_name = 'Manas200542367';

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
