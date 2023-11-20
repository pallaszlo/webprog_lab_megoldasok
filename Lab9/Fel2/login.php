<?php

require_once 'Database.php';
require_once 'Customer.php';

$db = new Database();
$customer = new Customer($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = $customer->getByUsername($username);

    if ($user && $user["password"] && $customer->verifyPassword($password)) {
        session_start();
        $_SESSION["customer_id"] = $user["id"];
        header("Location: account.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>

<form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Login">
</form>

