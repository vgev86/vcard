<?php
include 'qr_functions.php';
$userId = $_GET['userId'] ?? '';
if ($userId !== '') {
    $qrCodeData = generateQRCodeData($userId);
    $qrCodePath = $qrCodeData['path'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Generate QR Code</h2>
        <form action="generateqr.php" method="GET">
            <label for="userId">Enter User ID:</label>
            <input type="text" id="userId" name="userId" required>
            <input type="submit" value="Generate QR Code">
        </form>
        <?php if (isset($qrCodePath)): ?>
            <img src="<?= $qrCodePath ?>" alt="QR Code">
            <p><a href="<?= $qrCodePath ?>" download="<?= $userId ?>.png">Download QR Code</a></p>
        <?php endif; ?>
    </div>
</body>
</html>
