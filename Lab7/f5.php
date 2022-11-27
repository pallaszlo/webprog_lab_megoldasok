<?php
session_start();

$_SESSION['nev'] = "Gezder Mihaly";
$_SESSION['szak'] = "GI";

echo "<a href='kiir.php'>Kiir</a>";

