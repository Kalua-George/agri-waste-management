<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriwaste";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Remove or comment out in production
// echo "Connected successfully";
?>
