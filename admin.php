<?php
session_start(); // Start a session for handling login status

// Check if the admin is logged in, redirect to login page if not
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <img src="path/to/your/logo.png" alt="Logo">
        <a href="home.php">Home</a>
    </header>
    <div class="container">
        <h2>Welcome to the Admin Panel</h2>
        <form action="/admin.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">Surname *</label>
            <input type="text" id="surname" name="surname" required>

            <label for="company">Company</label>
            <input type="text" id="company" name="company">

            <label for="jobTitle">Job Title</label>
            <input type="text" id="jobTitle" name="jobTitle">

            <label for="officePhone">Office Phone</label>
            <input type="tel" id="officePhone" name="officePhone">

            <label for="mobilePhone">Mobile Phone *</label>
            <input type="tel" id="mobilePhone" name="mobilePhone" required>

            <label for="address">Address</label>
            <textarea id="address" name="address"></textarea>

            <label for="mailAddress">Mail Address</label>
            <input type="email" id="mailAddress" name="mailAddress">

            <label for="webAddress">Web Address</label>
            <input type="url" id="webAddress" name="webAddress">

            <label for="facebookLink">Facebook Link</label>
            <input type="url" id="facebookLink" name="facebookLink">

            <label for="linkedinLink">LinkedIn Link</label>
            <input type="url" id="linkedinLink" name="linkedinLink">

            <label for="xLink">X Link</label>
            <input type="url" id="xLink" name="xLink">

            <label for="skype">Skype</label>
            <input type="text" id="skype" name="skype">

            <label for="telegram">Telegram</label>
            <input type="text" id="telegram" name="telegram">

            <label for="dob">Date of Birth</label>
            <input type="text" id="dob" name="dob">

            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>