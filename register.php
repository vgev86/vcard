<?php
// Include necessary files
require_once 'src/Database.php';
require_once 'src/User.php';

// Assuming form data is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Instantiate User object
    $user = new User();

    // Set user properties from form data
    $user->name = $_POST['name'];
    $user->surname = $_POST['surname'];
    // Continue setting other properties...

    // Validate and upload photo
    // This is a simplified version; you'll need to add security checks and error handling
    $target_directory = "data/users/photos/";
    $target_file = $target_directory . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["photo"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Save user to database
    if($user->save()) {
        echo "User registered successfully.";
    } else {
        echo "User could not be registered.";
    }
}
?>
