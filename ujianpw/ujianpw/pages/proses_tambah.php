<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $program_studi = $_POST['program_studi'];

    // Insert data ke database
    $stmt = $config->prepare("INSERT INTO mahasiswa (nim, nama, jenis_kelamin, alamat, program_studi) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nim, $nama, $jenis_kelamin, $alamat, $program_studi]);

    // Redirect kembali ke halaman utama
    header('Location: index.php');
    exit;
}
?>
