<?php
// login_process.php
require 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    // Start session, set session variables, redirect to dashboard, etc.
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}
?>
