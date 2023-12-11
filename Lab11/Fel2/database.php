<?php
// database.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchData($conn) {
    $students = [];
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = [
                "id" => $row["id"],
                "name" => $row["name"],
                "age" => $row["age"],
            ];
        }
    }

    return $students;
}

function addStudent($conn, $name, $age) {
    $sql = "INSERT INTO students (name, age) VALUES ('$name', $age)";
    return $conn->query($sql);
}

function deleteStudent($conn, $id) {
    $sql = "DELETE FROM students WHERE id = $id";
    return $conn->query($sql);
}

function updateStudent($conn, $id, $name, $age) {
    $sql = "UPDATE students SET name='$name', age=$age WHERE id=$id";
    return $conn->query($sql);
}

?>
