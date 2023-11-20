<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "university";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT * FROM students");
while ($row = $result->fetch_assoc()) {
    echo "Student ID: " . $row["id"] . ", Name: " . $row["name"] . "<br>";
}

$result = $conn->query("SELECT * FROM courses");
while ($row = $result->fetch_assoc()) {
    echo "Course ID: " . $row["id"] . ", Title: " . $row["title"] . "<br>";
}


//Retrieve enrollments (students and their courses)
$result = $conn->query("SELECT students.name as student_name, courses.title as course_title
                        FROM student_courses
                        JOIN students ON student_courses.student_id = students.id
                        JOIN courses ON student_courses.course_id = courses.id");

while ($row = $result->fetch_assoc()) {
    echo "Student: " . $row["student_name"] . ", Course: " . $row["course_title"] . "<br>";
}

//Retrieve courses for a specific student (e.g., Student 3):
$studentId = 1;
$result = $conn->query("SELECT courses.title
                        FROM student_courses
                        JOIN courses ON student_courses.course_id = courses.id
                        WHERE student_courses.student_id = $studentId");

echo "Courses for Student 1: ";
while ($row = $result->fetch_assoc()) {
    echo $row["title"] . ", ";
}


//Retrieve students for a specific course (e.g., Course 2):
$courseId = 2;
$result = $conn->query("SELECT students.name
                        FROM student_courses
                        JOIN students ON student_courses.student_id = students.id
                        WHERE student_courses.course_id = $courseId");

echo "Students enrolled in Course 2: ";
while ($row = $result->fetch_assoc()) {
    echo $row["name"] . ", ";
}
