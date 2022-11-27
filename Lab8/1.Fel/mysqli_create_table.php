<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egyetem2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE hallgatok (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nev varchar(30) NOT NULL,
  szak varchar(30) NOT NULL,
  atlag double NOT NULL
)";
    


if ($conn->query($sql) === TRUE) {
    echo "Table hallgatok created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>