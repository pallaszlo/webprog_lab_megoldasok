<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egyetem";

// Establish a connection to the MySQL server
$conn = new mysqli($servername, $username, $password);

// Check if the connection to the server was successful
if ($conn->connect_error) {
    die("Connection to the server failed: " . $conn->connect_error);
}

// Select the specific database you want to work with
if ($conn->select_db($dbname)) {
    echo "Connected to database: $dbname";
} else {
    die("Connection to the database failed: " . $conn->error);
}

// You can now perform database operations using this connection

// Close the database connection when you're done
$conn->close();
?>
