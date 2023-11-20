<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking_app";

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Select the created database
$conn->select_db($dbname);

// Create the 'customers' table
$sql = "CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(10, 2) DEFAULT 0.00
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'customers' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Create the 'transactions' table
$sql = "CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT,
    receiver_id INT,
    amount DECIMAL(10, 2),
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (sender_id) REFERENCES customers(id),
    FOREIGN KEY (receiver_id) REFERENCES customers(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'transactions' created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}


// Insert two users (user1, user2)
$passwordHashUser1 = password_hash("user1", PASSWORD_DEFAULT);
$passwordHashUser2 = password_hash("user2", PASSWORD_DEFAULT);

$sqlInsertUsers = "INSERT INTO customers (username, password) VALUES 
                    ('user1', '$passwordHashUser1'),
                    ('user2', '$passwordHashUser2')";

if ($conn->query($sqlInsertUsers) === TRUE) {
    echo "Users inserted successfully\n";
} else {
    echo "Error inserting users: " . $conn->error . "\n";
}

// Close the database connection
$conn->close();
?>
