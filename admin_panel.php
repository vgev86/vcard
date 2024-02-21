<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h2>Welcome to the Admin Panel</h2>
        <nav>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <!-- Admin functionalities like user management can be added here -->
    </div>
</body>
</html>
