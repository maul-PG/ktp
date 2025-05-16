<?php
header("Location: halamanD.php");

session_start();
include "koneksi.php";

$id_user = $_SESSION['id_user'] ?? null;

if (!$id_user) {
    echo "<script>alert('Silakan login terlebih dahulu'); window.location.href='login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda | e-KTP Remaja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
          <li class="nav-item"><a class="nav-link active" href="index.php">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentang.php">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="cara_daftar.php">Cara Daftar</a></li>
          <li class="nav-item"><a class="nav-link" href="data_remaja.php">Data Remaja</a></li>
          <li class="nav-item">
            <a class="btn btn-danger ms-3" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

  <!-- Hero Section -->
 <section class="text-center py-5 min-vh-100 d-flex flex-column align-items-center justify-content-center"
  style="background-image: url('img/ktp-hm.png'); background-repeat: no-repeat; background-size: cover; background-position: center; padding-top: 120px;">
    <div>
      <h1 class="fw-bold display-5">Pendataan Remaja Non-KTP</h1>
      <p class="lead">Membantu remaja mendapatkan identitas resmi dengan mudah dan cepat.</p>
      <div class="mt-4">
        <a href="daftar_diri.php" class="btn btn-primary btn-lg mx-2">Daftar Sekarang</a>
        <a href="cekDataAnda.php" class="btn btn-outline-secondary btn-lg mx-2">Cek Data Anda</a>
      </div>
    </div>
  </section>

  <!-- Content Section -->
   

  <!-- Footer -->
  <footer class="text-white text-center py-3 bg-secondary">
    <p class="mb-0">&copy; 2025 e-KTP Remaja</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
