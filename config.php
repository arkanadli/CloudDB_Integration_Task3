<?php
$host = "database-1.cb44egeuga65.ap-southeast-2.rds.amazonaws.com";
$dbname = "nama_database_anda"; 
$username = "arkanadli";
$password = "adlidewa321123";

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi ke PostgreSQL berhasil!";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
