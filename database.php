<?php
// Database credentials
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sms';

// Create a database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check for errors
if ($db->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
?>

