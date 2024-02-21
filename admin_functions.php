<?php
// admin_functions.php
session_start();

if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    die("Access denied.");
}

function performAdminTask() {
    // Admin task here
}
?>
