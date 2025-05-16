<?php
include 'koneksi.php'; // pastikan file koneksi DB sudah dibuat dan variabel $conn terdefinisi

session_start();

$query = mysqli_query($conn, "SELECT * FROM daftar");
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Remaja | e-KTP Remaja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .table-wrapper {
      background: rgba(255, 255, 255, 0.85);
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid px-5">
    <a class="navbar-brand fw-bold" href="home.php">e-KTP Remaja</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="cara_daftar.php">Cara Daftar</a></li>
        <li class="nav-item"><a class="nav-link active" href="data_remaja.php">Data Remaja</a></li>
        <li class="nav-item">
          <a class="btn btn-danger ms-3" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section + Table -->
<section class="text-center py-5 min-vh-100 d-flex flex-column align-items-center justify-content-start"
  style="background-image: url('img/ktp-hm.png'); background-repeat: no-repeat; background-size: cover; background-position: center; padding-top: 120px;">
  <div class="mb-4">
    <h1 class="fw-bold display-5">Data Remaja</h1>
    <p class="lead">Daftar remaja yang telah mendaftar e-KTP</p>
  </div>

  <div class="container table-wrapper">
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>RT/RW</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $no = 1;
          while ($row = mysqli_fetch_assoc($query)) {
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama_lengkap']) ?></td>
            <td><?= htmlspecialchars($row['tempat_lahir']) . ", " . htmlspecialchars($row['tanggal_lahir']) ?></td>
            <td><?= htmlspecialchars($row['jenis_kelamin']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['rt_rw']) ?></td>
            <td><?= htmlspecialchars($row['kelurahan']) ?></td>
            <td><?= htmlspecialchars($row['kecamatan']) ?></td>
            <td class="text-center">
              <a href="hapus.php?hapus=<?= $row['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
                
          </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="text-white text-center py-3 bg-secondary">
  <p class="mb-0">&copy; 2025 e-KTP Remaja</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
