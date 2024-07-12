<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #ff6b6b;
            color: white;
            border-radius: 20px 20px 0 0;
        }
        .btn-primary {
            background-color: #4ecdc4;
            border: none;
        }
        .btn-secondary {
            background-color: #ff6b6b;
            border: none;
        }
        .form-control:focus {
            border-color: #4ecdc4;
            box-shadow: 0 0 0 0.2rem rgba(78,205,196,.25);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 text-center">✏ Tambah Mahasiswa Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST">
                        <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="1" checked>
                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="0">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="program_studi">Program Studi</label>
                        <input type="text" class="form-control" id="program_studi" name="program_studi">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>