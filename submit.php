<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sequence = $_POST["sequence"];
    $description = $_POST["description"];

    try {
        $stmt = $pdo->prepare("INSERT INTO dna_sequences (sequence, description) VALUES (:sequence, :description)");
        $stmt->execute([":sequence" => $sequence, ":description" => $description]);

        echo "Data berhasil disimpan!";
    } catch (PDOException $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
}
?>
