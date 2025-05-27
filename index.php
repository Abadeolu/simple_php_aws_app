<?php
$host = "test-database-1.crgueu2066o5.eu-west-2.rds.amazonaws.com";  // e.g., mydb.xxxxx.us-east-1.rds.amazonaws.com
$dbname = "test-database-1";
$username = "test_admin";
$password = "bRp8mRohkAZQppUfluVN";

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
