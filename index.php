<?php
session_start();

// If user is not logged in, redirect to halamanD.php
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: halamanD.php");
    exit();
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
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
      <div class="container-fluid px-5">
      <a class="navbar-brand fw-bold d-flex align-items-center text-black" href="index.php">
        <img src="img/ktp.png" alt="Logo KTP" width="36" height="36" class="me-2">
        e-KTP Remaja
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item"><a class="nav-link active fw-bold text-black" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link text-black" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link text-black" href="cara_daftar.php">Cara Daftar</a></li>
        <li class="nav-item"><a class="nav-link text-black" href="data_remaja.php">Data Remaja</a></li>
        <li class="nav-item">
          <a class="btn btn-dark text-white ms-3 fw-bold" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

 

  <!-- Hero Section -->
<section class="text-center py-5 min-vh-100 d-flex flex-column align-items-center justify-content-center" style="background: url('img/ktp-hm.png') center center/cover no-repeat fixed;">
  <div style="height: 80px;"></div> <!-- Spacer to push card lower -->
  <div class="card shadow-lg rounded-4 p-5" style="max-width: 500px; background: rgba(255,255,255,0.92); border: none;">
    <div class="card-body">
      <img src="img/ktp.png" alt="Logo KTP" width="64" height="64" class="mb-3">
      <h1 class="fw-bold display-5 mb-3 text-dark">Pendataan Remaja Non-KTP</h1>
      <p class="lead mb-4 text-secondary">Membantu remaja mendapatkan identitas resmi dengan mudah dan cepat.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="daftar_diri.php" class="btn btn-dark btn-lg px-4 shadow-sm">Daftar Sekarang</a>
        <a href="cekDataAnda.php" class="btn btn-outline-secondary btn-lg px-4 shadow-sm">Cek Data Anda</a>
      </div>
    </div>
  </div>
  <!-- Info section below card -->
  <div class="mt-5">
    <div class="bg-white bg-opacity-75 rounded-4 shadow-sm px-4 py-3 d-inline-block">
      <h5 class="fw-semibold mb-3 text-dark">Kenapa e-KTP Remaja?</h5>
      <ul class="list-unstyled d-flex flex-wrap justify-content-center gap-4 mb-0">
        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Proses Mudah &amp; Cepat</li>
        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Data Aman &amp; Terjamin</li>
        <li><i class="bi bi-check-circle-fill text-success me-2"></i>Bantuan Langsung dari Petugas</li>
      </ul>
    </div>
  </div>
</section>
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Content Section -->
   

  <!-- Footer -->
  <footer class="text-white text-center py-3 bg-dark">
    <p class="mb-0">&copy; 2025 e-KTP Remaja</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
