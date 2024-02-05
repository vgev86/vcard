<?php
function generateQRCodeData($userId) {
    // Use your logic to generate QR code data
    // Example using PHP QR Code library (adjust the library path as needed)
    include 'phpqrcode/qrlib.php';

    $tempDir = 'temp/';
    if (!file_exists($tempDir)) {
        mkdir($tempDir);
    }

    $codeFile = $tempDir . $userId . '.png';

    // Adjust the data you want to encode in the QR code
    $data = 'https://vcard.actrade.am/' . $userId;

    // Generate QR code
    QRcode::png($data, $codeFile, QR_ECLEVEL_L, 4);

    return $codeFile;
}
?>