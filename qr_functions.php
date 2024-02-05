<?php
function generateQRCodeData($userId) {
    include 'phpqrcode/qrlib.php';

    $qrDirectory = 'data/users/qr/';
    if (!file_exists($qrDirectory)) {
        mkdir($qrDirectory, 0777, true); // Ensure the directory exists
    }

    $codeFile = $qrDirectory . $userId . '.png';

    $data = 'https://vcard.actrade.am/' . $userId;

    QRcode::png($data, $codeFile, QR_ECLEVEL_L, 4);

    return ['path' => $codeFile, 'data' => $data];
}
?>