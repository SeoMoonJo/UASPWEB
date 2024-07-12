<?php
require 'config.php';

// Ambil ID mahasiswa yang akan dihapus
$id = $_GET['id'];

// Hapus data dari database
$stmt = $config->prepare("DELETE FROM mahasiswa WHERE id = ?");
$stmt->execute([$id]);

// Redirect kembali ke halaman utama
header('Location: index.php');
exit;
?>
