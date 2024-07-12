<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
        .table {
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="card-title text-primary">Data Mahasiswa</h1>
                    <a href="tambah.php" class="btn btn-success">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Mahasiswa
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config.php';
                            $query = $config->query("SELECT * FROM mahasiswa");
                            $no = 1;
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                echo '<tr>';
                                echo '<td>' . $no++ . '</td>';
                                echo '<td>' . htmlspecialchars($row['nim']) . '</td>';
                                echo '<td>' . htmlspecialchars($row['nama']) . '</td>';
                                echo '<td>' . ($row['jenis_kelamin'] == 1 ? 'Laki-laki' : 'Perempuan') . '</td>';
                                echo '<td>' . htmlspecialchars($row['alamat']) . '</td>';
                                echo '<td>' . htmlspecialchars($row['program_studi']) . '</td>';
                                echo '<td>';
                                echo '<a class="btn btn-sm btn-primary" href="detail.php?id=' . $row['id'] . '">';
                                echo '<i class="mdi mdi-eye"></i> Detail</a> ';
                                echo '<a class="btn btn-sm btn-info" href="edit.php?id=' . $row['id'] . '">';
                                echo '<i class="mdi mdi-pencil"></i> Edit</a> ';
                                echo '<a class="btn btn-sm btn-danger" href="hapus.php?id=' . $row['id'] . '">';
                                echo '<i class="mdi mdi-trash-can"></i> Hapus</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>