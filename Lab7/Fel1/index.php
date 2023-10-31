<?php
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
} else {
    $visits = 1;
}

setcookie('visits', $visits, time() + 3600 * 24 * 365);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Látogatás Számláló</title>
</head>
<body>
<h1>Weboldal Látogatás Számláló</h1>
<p>Ezt az oldalt <?php echo $visits; ?> alkalommal látogatták meg.</p>
</body>
</html>
