<?php
// api.php

include_once("database.php");

header("Content-Type: application/json");

// Handle GET request to fetch data
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $students = fetchData($conn);
    echo json_encode($students);
}

// Handle POST request to add a new student
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data["name"];
    $age = $data["age"];
    $result = addStudent($conn, $name, $age);
    echo json_encode(["success" => $result]);
}

// Handle DELETE request to delete a student
if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $id = $_GET["id"];
    $result = deleteStudent($conn, $id);
    echo json_encode(["success" => $result]);
}

// Handle PUT request to update a student
if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    $id = $_GET["id"];
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data["name"];
    $age = $data["age"];
    $result = updateStudent($conn, $id, $name, $age);
    echo json_encode(["success" => $result]);
}

?>
