<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin_panel.php");
    exit;
}

$loginError = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'database.php'; // Assume this file contains database connection logic
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Dummy credentials for demonstration
    $adminUsername = 'admin';
    $adminPasswordHash = password_hash('adminpassword', PASSWORD_DEFAULT); // Replace with the hashed password in your database

    if ($username === $adminUsername && password_verify($password, $adminPasswordHash)) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_panel.php");
        exit;
    } else {
        $loginError = 'Incorrect username or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <?php if ($loginError !== '') echo "<p class='error'>$loginError</p>"; ?>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
