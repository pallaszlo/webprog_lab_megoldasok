<?php
// Check if the user is not logged in
if (!isset($_COOKIE['userLoggedIn']) || $_COOKIE['userLoggedIn'] !== 'true') {
    header('Location: login.php'); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
<h1>Welcome to Your Dashboard</h1>
<p>This is your user dashboard. You can access your account settings, view your profile, and perform other actions here.</p>
<a href="logout.php">Logout</a>
</body>
</html>
