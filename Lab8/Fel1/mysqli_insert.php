<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egyetem";

// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);


// Check if the connection was successful
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Hallgatók adatai
$studentsData = array(
    array('John Doe', 'Informatika', 5.2),
    array('Alice Smith', 'Műszaki Informatika', 7.9),
    array('Bob Johnson', 'Gazdaságinformatika', 8.8),
    array('Eva Wilson', 'Matematika', 9.5),
    array('Mike Brown', 'Fizika', 5.0),
    array('Sarah Davis', 'Kémia', 3.7),
    array('David Lee', 'Biológia', 8.1),
    array('Linda Martinez', 'Informatika', 8.8),
    array('Tom Miller', 'Műszaki Informatika', 5.3),
    array('Karen Wilson', 'Gazdaságinformatika', 6.5)
);

/// Adatok beszúrása a hallgatok táblába
foreach ($studentsData as $student) {
    $nev = $student[0];
    $szak = $student[1];
    $atlag = $student[2];

    $sql = "INSERT INTO hallgatok (nev, szak, atlag) VALUES ('$nev', '$szak', $atlag)";

    if ($conn->query($sql) !== TRUE) {
        echo "Hiba az adatbeszúrás közben: " . $conn->error;
    }
}

// Kapcsolat bezárása
$conn->close();

echo "Hallgatók sikeresen beszúrva az adatbázisba.";

