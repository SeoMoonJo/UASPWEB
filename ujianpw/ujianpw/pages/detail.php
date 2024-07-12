<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>
<body>
  <section class="section is-title-bar">
    <div class="level">
      <div class="level-left">
        <div class="level-item">
          <ul>
            <li>Admin</li>
            <li><a href="index.php">Data Mahasiswa</a></li>
            <li>Detail Mahasiswa</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="hero is-hero-bar">
    <div class="hero-body">
      <div class="level">
        <div class="level-left">
          <div class="level-item"><h1 class="title">
            Detail Mahasiswa
          </h1></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">
    <div class="card">
      <div class="card-content">
        <?php
          require 'config.php';

          // Ambil ID dari parameter URL
          $id = $_GET['id'];

          // Query untuk mengambil data mahasiswa berdasarkan ID
          $stmt = $config->prepare("SELECT * FROM mahasiswa WHERE id = ?");
          $stmt->execute([$id]);
          $mahasiswa = $stmt->fetch(PDO::FETCH_ASSOC);

          if (!$mahasiswa) {
            exit('Mahasiswa tidak ditemukan.');
          }
        ?>
        <div class="content">
          <p><strong>NIM:</strong> <?php echo htmlspecialchars($mahasiswa['nim']); ?></p>
          <p><strong>Nama:</strong> <?php echo htmlspecialchars($mahasiswa['nama']); ?></p>
          <p><strong>Jenis Kelamin:</strong> <?php echo ($mahasiswa['jenis_kelamin'] == 1 ? 'Laki-laki' : 'Perempuan'); ?></p>
          <p><strong>Alamat:</strong> <?php echo htmlspecialchars($mahasiswa['alamat']); ?></p>
          <p><strong>Program Studi:</strong> <?php echo htmlspecialchars($mahasiswa['program_studi']); ?></p>
        </div>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </section>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../assets/js/custom.js"></script>
</body>
</html>
