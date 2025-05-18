<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang | e-KTP Remaja</title>
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
        <li class="nav-item"><a class="nav-link text-black" href="index.php">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active fw-bold text-black" href="tentang.php">Tentang</a></li>
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
<section class="py-5 min-vh-100 d-flex flex-column align-items-center justify-content-center" style="background: url('img/ktp-hm.png') center center/cover no-repeat; padding-top: 120px;">
  <div class="container" style="margin-top: 90px; max-width: 500px;">
    <div class="card border-0 rounded-4 shadow-none" style="background: rgba(255,255,255,0.85);">
      <div class="card-header bg-transparent border-0 text-center">
        <img src="img/ktp.png" alt="Logo e-KTP Remaja" width="60" class="mb-2">
        <h2 class="fw-bold mb-0 text-dark">e-KTP Remaja</h2>
        <small class="text-muted">Solusi Digital untuk Generasi Muda</small>
      </div>
      <div class="card-body p-4">
        <h5 class="mb-3 text-center text-dark">Apa Itu e-KTP Remaja?</h5>
        <p class="mb-3 text-secondary text-center">
          e-KTP Remaja adalah aplikasi berbasis web yang dirancang khusus untuk membantu remaja dalam proses pendataan KTP elektronik secara efisien dan transparan.
        </p>
        <ul class="list-group list-group-flush mb-4">
          <li class="list-group-item bg-transparent border-0 ps-0">✔️ Proses pendaftaran mudah dan cepat</li>
          <li class="list-group-item bg-transparent border-0 ps-0">✔️ Informasi persyaratan selalu diperbarui</li>
          <li class="list-group-item bg-transparent border-0 ps-0">✔️ Pantau status pengajuan secara online</li>
          <li class="list-group-item bg-transparent border-0 ps-0">✔️ Dukungan layanan pelanggan responsif</li>
        </ul>
        <div class="text-center mb-3">
          <img src="https://img.freepik.com/free-vector/id-card-concept-illustration_114360-7895.jpg?w=400" alt="Ilustrasi e-KTP Remaja" class="img-fluid rounded" style="max-height: 140px;">
        </div>
        <div class="text-center">
          <button class="btn btn-dark px-4" data-bs-toggle="modal" data-bs-target="#kontakModal">Kontak Kami</button>
        </div>
            </div>
          </div>
        </div>

        <!-- Modal Kontak -->
        <div class="modal fade" id="kontakModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content rounded-3">
        <div class="modal-header bg-dark text-white">
          <h5 class="modal-title fw-bold">Kontak Kami</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-unstyled mb-0">
            <li><strong>Email:</strong> info@ektp-remaja.id</li>
            <li><strong>Telp:</strong> (021) 123-4567</li>
            <li><strong>WA:</strong> +62 812-3456-7890</li>
            <li><strong>Alamat:</strong> Jl. SeturanRaya No. 1, Yogyakarta</li>
          </ul>
        </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Bootstrap JS untuk modal -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<footer class="text-white text-center py-3 bg-dark">
  <p class="mb-0">&copy; 2025 e-KTP Remaja</p>
</footer>

</body>
</html>