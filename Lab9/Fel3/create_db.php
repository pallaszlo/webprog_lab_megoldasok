<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "university";

// Create a connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Select the created database
$conn->select_db($database);

// Create 'students' table
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create 'courses' table
$sql = "CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'courses' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create 'student_courses' table
$sql = "CREATE TABLE IF NOT EXISTS student_courses (
    student_id INT,
    course_id INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'student_courses' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Insert sample data into 'students' table
$sql = "INSERT INTO students (name) VALUES
    ('John Doe'),
    ('Jane Smith')";
$conn->query($sql);

// Insert sample data into 'courses' table
$sql = "INSERT INTO courses (title) VALUES
    ('Math 101'),
    ('History 201')";
$conn->query($sql);

// Insert sample data into 'student_courses' table to represent the enrollment
$sql = "INSERT INTO student_courses (student_id, course_id) VALUES
    (1, 1),
    (1, 2),
    (2, 2)";
$conn->query($sql);

echo "Sample data inserted successfully\n";

// Close the connection
$conn->close();
?>
