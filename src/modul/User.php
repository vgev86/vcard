<?php
require_once 'Database.php';

class User {
    private $conn;
    private $table_name = "users";

    // User properties
    public $name;
    public $surname;
    // Add other properties here

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Function to save user
    public function save() {
        // Implement saving logic, including file upload and database insertion
    }

    // Function to generate and save QR code
    public function generateQRCode() {
        // Implement QR code generation
    }
}
?>
