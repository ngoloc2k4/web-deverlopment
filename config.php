<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Change this if you have a password for MySQL
$dbname = 'SchoolManagement';

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
