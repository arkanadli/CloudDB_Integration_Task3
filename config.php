<?php
$host = "database-1.cb44egeuga65.ap-southeast-2.rds.amazonaws.com";
$dbname = "";
$username = "arkanadli";
$password = "adlidewa321123";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>