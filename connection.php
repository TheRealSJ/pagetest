<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdatabase";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>