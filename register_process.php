<?php
// Include database connection logic here
// Include email sending library or use a third-party service

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$verification_token = md5(uniqid(rand(), true));

// Insert user data into the database
// Make sure to escape input to prevent SQL injection

// Send email with verification link
$verification_link = "https://yourdomain.com/verify.php?token=$verification_token";
$subject = "Email Verification";
$message = "Hello $name,\n\nPlease click the following link to verify your email address:\n$verification_link";
$headers = "From: your_email@example.com";

if (mail($email, $subject, $message, $headers)) {
    echo "Verification email sent. Please check your email.";
} else {
    echo "Failed to send verification email.";
}
?>
