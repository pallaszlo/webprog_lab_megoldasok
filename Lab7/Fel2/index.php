<?php
$selectedTheme = 'light';

if (isset($_POST['theme'])) {
    $selectedTheme = $_POST['theme'];

    setcookie('userTheme', $selectedTheme, time() + 30 * 24 * 60 * 60, '/');
}

if (isset($_COOKIE['userTheme'])) {
    $selectedTheme = $_COOKIE['userTheme'];
}

$themes = ['light', 'dark', 'blue'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Theme Preferences</title>
    <style>
        body {
            background-color: <?php echo $selectedTheme === 'dark' ? 'black' : ($selectedTheme === 'blue' ? 'blue' : 'white'); ?>;
            color: <?php echo $selectedTheme === 'light' ? 'black' : 'white'; ?>;
        }
    </style>
</head>
<body>
<h1>Theme Preferences</h1>
<p>Choose your preferred website theme:</p>
<form method="post">
    <select name="theme">
        <?php foreach ($themes as $theme) {
            echo "<option value='$theme' " . ($theme === $selectedTheme ? 'selected' : '') . ">$theme</option>";
        } ?>
    </select>
    <input type="submit" value="Set Theme">
</form>
</body>
</html>
