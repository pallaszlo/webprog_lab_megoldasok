<?php
session_start();

echo $_SESSION['nev']."<br>";
echo $_SESSION['szak'];
echo "<br>".session_id();
echo "<br>".session_name();
