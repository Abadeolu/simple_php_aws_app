<?php
$host = "YOUR_RDS_ENDPOINT";  // e.g., mydb.xxxxx.us-east-1.rds.amazonaws.com
$dbname = "YOUR_DATABASE_NAME";
$username = "YOUR_DB_USERNAME";
$password = "YOUR_DB_PASSWORD";

echo "<h2>Welcome to my Load Balanced Web App on AWS!</h2>";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<p>✅ Successfully connected to the database!</p>";
} catch (PDOException $e) {
    echo "<p>❌ Database connection failed: " . $e->getMessage() . "</p>";
}
?>
