<?php
$host = "database-1.cb44egeuga65.ap-southeast-2.rds.amazonaws.com";
$dbname = ""; 
$username = "arkanadli";
$password = "adlidewa321123";

try {
    $dsn = "pgsql:host=$host;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    echo "Koneksi ke PostgreSQL berhasil!";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
