<?php
require '../config.php';

$id = $_GET['id'] ?? null;

if ($mysqli && $id) {
    $stmt = $mysqli->prepare("DELETE FROM produk_mahasiswa WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}

header('Location: produk_list.php');
exit;
