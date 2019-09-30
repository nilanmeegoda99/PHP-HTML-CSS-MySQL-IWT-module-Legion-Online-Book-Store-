<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obsdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    // close connection if error exists
    die("Connection failed: " . $conn->connect_error);
} 



?>