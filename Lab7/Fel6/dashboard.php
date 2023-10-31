<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username']; // Get the username from the session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h1>Welcome to the Dashboard</h1>
<p>You are now logged in as <?php echo $username; ?></p>
<p>Status: Logged</p>

<p><a href="logout.php">Logout</a></p>
</body>
</html>
