<?php
function generateQRCodeData($userId) {
    include 'phpqrcode/qrlib.php';

    $qrDirectory = 'data/users/qr/';
    if (!file_exists($qrDirectory)) {
        mkdir($qrDirectory, 0777, true);
    }

    $codeFile = $qrDirectory . $userId . '.png';

    $data = 'https://vcard.actrade.am/' . $userId;

    QRcode::png($data, $codeFile, QR_ECLEVEL_L, 4);

    // Insert data into MySQL (adjust the credentials and SQL statement)
    //$servername = "your_servername";
    //$username = "your_username";
    //$password = "your_password";
    //$dbname = "your_dbname";

    $servername = "localhost";
    $username = "vcardactrade_vcardu";
    $password = "kA$IFvM{d~0g";
    $dbname = "vcardactrade_vcard";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users_qr (user_id, qr_path, qr_data) VALUES ('$userId', '$codeFile', '$data')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    return ['path' => $codeFile, 'data' => $data];
}
?>