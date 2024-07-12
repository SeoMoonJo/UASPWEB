<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        .navbar {
            background-color: #34495e;
        }
        .card {
            background-color: #34495e;
            border: none;
            border-radius: 15px;
        }
        .form-control, .form-select {
            background-color: #2c3e50;
            border-color: #7f8c8d;
            color: #ecf0f1;
        }
        .form-control:focus, .form-select:focus {
            background-color: #2c3e50;
            border-color: #3498db;
            color: #ecf0f1;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        .btn-secondary {
            background-color: #95a5a6;
            border-color: #95a5a6;
        }
        .btn-secondary:hover {
            background-color: #7f8c8d;
            border-color: #7f8c8d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Edit Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mb-4 text-center">Edit Mahasiswa</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php
                        require 'config.php';
                        $id = $_GET['id'];
                $stmt = $config->prepare("SELECT * FROM mahasiswa WHERE id = ?");
                $stmt->execute([$id]);
                $mahasiswa = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$mahasiswa) {
                    exit('Mahasiswa tidak ditemukan.');
                }
                        ?>
                        <form action="proses_edit.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $mahasiswa['id']; ?>">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?php echo htmlspecialchars($mahasiswa['nim']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($mahasiswa['nama']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="1" <?php echo ($mahasiswa['jenis_kelamin'] == 1) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="0" <?php echo ($mahasiswa['jenis_kelamin'] == 0) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?php echo htmlspecialchars($mahasiswa['alamat']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="program_studi">Program Studi</label>
                        <input type="text" class="form-control" id="program_studi" name="program_studi" value="<?php echo htmlspecialchars($mahasiswa['program_studi']); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>