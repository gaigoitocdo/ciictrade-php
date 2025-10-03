<?php
$host = "45.77.249.7";   // IP VPS
$user = "ciictrade";     // Username DB
$pass = "ciictrade";     // Password DB
$db   = "ciictrade";     // Database name
$port = 3306;            // Port MySQL mặc định

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("❌ Kết nối thất bại: " . $conn->connect_error);
}
echo "✅ Kết nối MySQL thành công!";
?>
