<?php
$host = 'localhost'; // e.g., sqlXXX.epizy.com (for InfinityFree) or localhost (for XAMPP)
$dbname = 'service_motor'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

try {
    // Set up the PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Set PDO options
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exception handling
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetch results as associative arrays by default
} catch (PDOException $e) {
    // Handle connection errors
    die('Database connection failed: ' . $e->getMessage());
}
?>