<?php
// Database configuration
$host = "localhost";
$db = "capstone";
$username = "root";
$password = "";

// Create database connection
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
