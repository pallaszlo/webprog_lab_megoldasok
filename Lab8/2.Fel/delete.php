<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egyetem2";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM hallgatok WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        //echo "Record deleted successfully";
        header("Location: listazas.php");  
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();

