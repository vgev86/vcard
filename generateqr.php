<?php
include 'qr_functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    <link rel="stylesheet" href="ccss/styles.cs">
</head>
<body>
    <div class="container">
        <h2>Generate QR Code</h2>
        <form action="/generateqr.php" method="GET">
            <label for="userId">Enter User ID:</label>
            <input type="text" id="userId" name="userId" required>
            <input type="submit" value="Generate QR Code">
        </form>

        <?php
        // Check if the user ID is provided in the URL
        if (isset($_GET['userId'])) {
            $userId = $_GET['userId'];
            $qrCodeData = generateQRCodeData($userId);
            $qrCodePath = $qrCodeData['path'];

            // Display the generated QR code
            echo '<img src="' . $qrCodePath . '" alt="QR Code">';

            // Provide a download link
            echo '<p><a href="' . $qrCodePath . '" download="' . $userId . '.png">Download QR Code</a></p>';
        }
        ?>
    </div>
</body>
</html>