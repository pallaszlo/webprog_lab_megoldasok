<?php
session_start();

$logged = $_SESSION['logged'] ?? false;
if ($logged){
    echo "Welcome: " . $_SESSION['user'];
    echo "<a href='logout.php'>Logout</a>";
}else {
    echo "Protected page!";
}
