<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace this with your user authentication logic (e.g., database query)
    if ($username === "john" && $password === "secret") {
        // Authentication successful
        $_SESSION['username'] = $username; // Set the username in the session
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<h1>Login</h1>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" value="Login">
</form>

<?php
if (isset($error_message)) {
    echo "<p>$error_message</p>";
}
?>
</body>
</html>
