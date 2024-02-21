<?php
include 'user_functions.php';

// Get user ID from the query parameters
$userId = isset($_GET['id']) ? $_GET['id'] : null;

// Validate and sanitize the user ID
$userId = filter_var($userId, FILTER_VALIDATE_INT);

if ($userId !== false) {
    $userData = getUserInformationById($userId);
} else {
    // Handle invalid or missing user ID
    // You can redirect the user or display an error message
}
?>

<!-- Your HTML for displaying user information -->
