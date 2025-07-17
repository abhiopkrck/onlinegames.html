<?php
$host = "localhost";         // Host name
$user = "root";              // Database username (default in XAMPP is root)
$password = "";              // Database password (default in XAMPP is empty)
$database = "clinic_db";     // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Optional: uncomment to confirm successful connection
// echo "✅ Database connected successfully";
?>
