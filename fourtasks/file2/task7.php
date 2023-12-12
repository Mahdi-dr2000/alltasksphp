<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website Counter</title>
</head>
<body>
    <h1>Welcome to the Website</h1>
    <p>This page has been refreshed <?php echo $_SESSION['counter']; ?> times.</p>
</body>
</html>
