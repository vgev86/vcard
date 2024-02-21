<?php
// qr_functions.php
require 'lib/phpqrcode/qrlib.php';

function generateQRCode($text) {
    // Generate QR code
    QRcode::png($text);
}
?>
