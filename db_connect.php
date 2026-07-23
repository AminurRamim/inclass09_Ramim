<?php
// db.php — Include this file at the top of every CRUD script
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "aramim1";          // Your GSU username
$pass = "YOUR_MYSQL_PASSWORD_HERE";  // <-- replace with your real MySQL password
$db   = "aramim1";          // DB name for this class (same as username)

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}
// $conn is now available in any file that requires this
