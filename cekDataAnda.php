<?php
session_start();
include "koneksi.php";
$id_user = $_SESSION['id_user'] ?? null;

$query = "SELECT * FROM daftar WHERE id_user = '$id_user'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data belum diisi. Silakan lengkapi dulu.'); window.location.href='daftar_diri.php';</script>";
    exit;
}
?>

<!--form cek data anda-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cek Data | e-KTP Remaja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card mx-auto mt-5" style="width: 600px; border-radius: 20px;">
  <div class="card-header text-center">
    <h3 class="fw-bold">Data e-KTP Anda</h3>
  </div>
  <div class="card-body">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($data['nama_lengkap']) ?></li>
    <li class="list-group-item"><strong>Tempat Lahir:</strong> <?= htmlspecialchars($data['tempat_lahir']) ?></li>
    <li class="list-group-item"><strong>Tanggal Lahir:</strong> <?= htmlspecialchars($data['tanggal_lahir']) ?></li>
    <li class="list-group-item"><strong>Alamat:</strong> <?= htmlspecialchars($data['alamat']) ?></li>
    <li class="list-group-item"><strong>RT / RW:</strong> <?= htmlspecialchars($data['rt_rw']) ?></li>
    <li class="list-group-item"><strong>Kelurahan:</strong> <?= htmlspecialchars($data['kelurahan']) ?></li>
    <li class="list-group-item"><strong>Kecamatan:</strong> <?= htmlspecialchars($data['kecamatan']) ?></li>
    <li class="list-group-item"><strong>Jenis Kelamin:</strong> <?= htmlspecialchars($data['jenis_kelamin']) ?></li>
    <li class="list-group-item"><strong>Agama:</strong> <?= htmlspecialchars($data['agama']) ?></li>
    <li class="list-group-item"><strong>Pekerjaan:</strong> <?= htmlspecialchars($data['pekerjaan']) ?></li>
    <li class="list-group-item"><strong>Status Perkawinan:</strong> <?= htmlspecialchars($data['status_perkawinan']) ?></li>
    <li class="list-group-item"><strong>Kewarganegaraan:</strong> <?= htmlspecialchars($data['kewarganegaraan']) ?></li>
  </ul>
</div>

  <div class="card-footer text-center">
    <div class="d-flex justify-content-between">
        <a href="edit_data.php" class="btn btn-primary flex-fill mx-1">Edit Data</a>
        <a href="index.php" class="btn btn-secondary flex-fill mx-1">Kembali ke Beranda</a>
        <a href="logout.php" class="btn btn-danger flex-fill mx-1">Logout</a>
    </div>
    <p class="text-muted mt-2">© 2025 e-KTP Remaja</p>
  </div>
</div>

</body>
</html>
