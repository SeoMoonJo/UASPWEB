<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];

    // Update data di database
    $stmt = $config->prepare("UPDATE mahasiswa SET nim = ?, nama = ?, jenis_kelamin = ?, alamat = ?, program_studi = ? WHERE id = ?");
    $stmt->execute([$nim, $nama, $jenis_kelamin, $alamat, $program_studi, $id]);

    // Redirect kembali ke halaman utama
    header('Location: index.php');
    exit;
}
?>
