<?php
session_start();

if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    if ($user=="admin" && $password=="admin"){
        $_SESSION['user'] = $user;
        $_SESSION['logged'] = true;
        header("Location: welcome.php");
    } else {
        echo "Hibas adatok!";
    }
}
?>

<form name="form1" method="post" action="login.php">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="SignIn" name="submit"></td>
        </tr>
    </table>
</form>

