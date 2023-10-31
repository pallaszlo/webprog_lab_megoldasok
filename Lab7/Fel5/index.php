<?php
session_start();

// Check if the 'page_views' session variable is set
if (isset($_SESSION['page_views'])) {
    $_SESSION['page_views']++; // Increment the page view count
    print "<a href='index.php'>növel</a>";
} else {
    $_SESSION['page_views'] = 1; // Initialize the page view count if it doesn't exist
    print "<a href='index.php'>növel</a>";
}

print "<br> A szesszióazonosító:".session_id();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web Page Counter</title>
</head>
<body>
<h1>Welcome to the Web Page Counter</h1>
<p>This page has been viewed <?php echo $_SESSION['page_views']; ?> times.</p>
</body>
</html>
