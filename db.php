<?php
$host = "db"; // 👈 your DB VM IP
$port = 3306;            // default MySQL port
$user = "student_user";  // DB username
$pass = "8879"; // DB password
$db   = "student_db";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset (recommended for MySQL 8)
$conn->set_charset("utf8mb4");
?>