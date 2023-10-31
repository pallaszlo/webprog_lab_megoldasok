<?php
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
} else {
    $visits = 1;
}

setcookie('visits', $visits, time() + 3600 * 24 * 365);
echo "Visits: " . $visits;
