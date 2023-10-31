<?php
// Initialize the default "remember me" status
$rememberMe = false;

// Check if the user has submitted the login form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = 'john';
    $validPassword = 'secret';

    if ($username === $validUsername && $password === $validPassword) {
        if (isset($_POST['remember_me'])) {
            setcookie('userLoggedIn', 'true', time() + 30 * 24 * 60 * 60, '/');
        }
        header('Location: dashboard.php'); // Redirect the user to a dashboard page
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

// Check if the user is already logged in
if (isset($_COOKIE['userLoggedIn']) && $_COOKIE['userLoggedIn'] === 'true') {
    header('Location: dashboard.php'); // Redirect to the dashboard if the user is already logged in
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login with "Remember Me"</title>
</head>
<body>
<h1>Login</h1>
<?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>
<form method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>
    <input type="checkbox" name="remember_me" id="remember_me">
    <label for="remember_me">Remember Me</label><br><br>
    <input type="submit" name="login" value="Log In">
</form>
</body>
</html>
