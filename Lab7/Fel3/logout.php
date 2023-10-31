<?php
if (isset($_COOKIE['userLoggedIn']) && $_COOKIE['userLoggedIn'] === 'true') {
    setcookie('userLoggedIn', '', time() - 3600);
}

header('Location: login.php');
exit();
?>
