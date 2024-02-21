<?php
include 'qr_functions.php';
$userId = $_GET['userId'] ?? '';
if ($userId !== '') {
    $qrCodeData = generateQRCodeData($userId);
    $qrCodePath = $
