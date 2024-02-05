<?php
session_start(); // Start a session for handling login status

// Check if the admin is already logged in, redirect to admin panel if yes
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in']) {
    header("Location: admin.php");
    exit();
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the entered credentials (replace with your actual database connection logic)
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Replace 'your_admin_username' and 'your_admin_password_hash' with actual admin credentials
    $adminUsername = 'your_admin_username';
    $adminPasswordHash = 'your_admin_password_hash';

    if ($enteredUsername == $adminUsername && password_verify($enteredPassword, $adminPasswordHash)) {
        // Admin login successful, set session variable and redirect to admin panel
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        // Incorrect username or password, show error message
        $error_message = "Incorrect username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form action="/login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <?php
            if (isset($error_message)) {
                echo '<p class="error">' . $error_message . '</p>';
            }
            ?>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>