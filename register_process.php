<?php
// register_process.php
require 'database.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Prepared statement to prevent SQL injection
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->execute([$username, $password]);

echo "User registered successfully!";
?>
