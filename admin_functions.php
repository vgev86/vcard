<?php
function handleFormSubmission() {
    
    $servername = "localhost";
    $username = "vcardactrade_vcardu";
    $password = "kA$IFvM{d~0g";
    $dbname = "vcardactrade_vcard";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $company = $_POST['company'];
    $jobTitle = $_POST['jobTitle'];
    $officePhone = $_POST['officePhone'];
    $mobilePhone = $_POST['mobilePhone'];
    $address = $_POST['address'];
    $mailAddress = $_POST['mailAddress'];
    $webAddress = $_POST['webAddress'];
    $facebookLink = $_POST['facebookLink'];
    $linkedinLink = $_POST['linkedinLink'];
    $xLink = $_POST['xLink'];
    $skype = $_POST['skype'];
    $telegram = $_POST['telegram'];
    $dob = $_POST['dob'];

    // Generate a unique ID for the user
    $userId = uniqid();

    // Handle file uploads
    $targetDir = "data/users/photos/";
    $photoFile = $targetDir . $name . $surname . substr($mobilePhone, -3) . '_' . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $photoFile);
  // Prepare and execute SQL statement to insert data into the database
  $sql = "INSERT INTO users (user_id, name, surname, company, job_title, office_phone, mobile_phone, address, mail_address, 
  web_address, facebook_link, linkedin_link, x_link, skype, telegram, dob, photo) 
  VALUES ('$userId', '$name', '$surname', '$company', '$jobTitle', '$officePhone', '$mobilePhone', '$address', 
          '$mailAddress', '$webAddress', '$facebookLink', '$linkedinLink', '$xLink', '$skype', '$telegram', '$dob', '$photoFile')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}
?>