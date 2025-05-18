<?php
session_start();
include 'koneksi.php';

// Cek jika user belum login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

// Proses update data - hanya untuk admin
if (isset($_POST['id_daftar'])) {
    if ($_SESSION['role'] !== 'admin') {
        echo "<script>alert('Anda tidak memiliki akses untuk mengubah data!');
        window.location='data_remaja.php';</script>";
        exit();
    }
    $id_daftar = $_POST['id_daftar'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $rt_rw = $_POST['rt_rw'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $pekerjaan = $_POST['pekerjaan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];

    $update = mysqli_query($conn, "UPDATE daftar SET
        nama_lengkap='$nama_lengkap',
        tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        jenis_kelamin='$jenis_kelamin',
        alamat='$alamat',
        rt_rw='$rt_rw',
        kelurahan='$kelurahan',
        kecamatan='$kecamatan',
        agama='$agama',
        status_perkawinan='$status_perkawinan',
        pekerjaan='$pekerjaan',
        kewarganegaraan='$kewarganegaraan'
        WHERE id_daftar='$id_daftar'
    ");

    // Setelah update, reload halaman agar data terbaru tampil
    if ($update) {
        header("Location: data_remaja.php?success=1");
        exit();
    } else {
        echo "<script>alert('Gagal update data!');</script>";
    }
}

$query = mysqli_query($conn, "SELECT * FROM daftar");
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Remaja | e-KTP Remaja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css"/>
<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
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
        <li class="nav-item"><a class="nav-link text-black" href="tentang.php">Tentang</a></li>
        <li class="nav-item"><a class="nav-link text-black" href="cara_daftar.php">Cara Daftar</a></li>
        <li class="nav-item"><a class="nav-link active fw-bold text-black" href="data_remaja.php">Data Remaja</a></li>
        <li class="nav-item">
          <a class="btn btn-dark text-white ms-3 fw-bold" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Hero Section dan TableTabel -->
<section class="text-center min-vh-100 d-flex flex-column align-items-center justify-content-start"
  style="background-image: url('img/ktp-hm.png'); background-repeat: no-repeat; background-size: cover; background-position: center; padding-top: 100px;">
  <div class="mb-4">
    <h1 class="fw-bold display-5">Data Remaja</h1>
    <p class="lead">Daftar remaja yang telah mendaftar e-KTP</p>
  </div>

  <div class="container table-wrapper">
    <div class="table-responsive">
      <table id="tabelRemaja" class="table table-bordered">
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
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <a href="hapus.php?hapus=<?= $row['id_user'] ?>" class="btn btn-danger btn-sm" 
           onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
        <button type="button" class="btn btn-warning btn-sm ms-1"
            onclick="showProfilModal(
                '<?= $row['id_daftar'] ?>',
                '<?= htmlspecialchars($row['nama_lengkap'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['tempat_lahir'], ENT_QUOTES) ?>',
                '<?= $row['tanggal_lahir'] ?>',
                '<?= $row['jenis_kelamin'] ?>',
                '<?= htmlspecialchars($row['alamat'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['rt_rw'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['kelurahan'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['kecamatan'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['agama'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['status_perkawinan'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['pekerjaan'], ENT_QUOTES) ?>',
                '<?= htmlspecialchars($row['kewarganegaraan'], ENT_QUOTES) ?>'
            )"
            data-bs-toggle="modal" data-bs-target="#editProfilModal">
            Edit
        </button>
    <?php endif; ?>
</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="text-white text-center py-3 bg-dark">
  <p class="mb-0">&copy; 2025 e-KTP Remaja</p>
</footer>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!--sorting tabel-->

<script>
  $(document).ready(function () {
    $('#tabelRemaja').DataTable({
      columnDefs: [
        {
          targets: -1,       // Kolom ke-8 (index mulai dari 0)
          orderable: false
        }
      ]
    });
  });
</script>


</body>
</html>

<!-- Modal Edit Profil -->
<div class="modal fade" id="editProfilModal" tabindex="-1" aria-labelledby="editProfilModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editProfilForm" action="data_remaja.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfilModalLabel">Edit Data Remaja</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_daftar" id="modal_id_daftar">
          <div class="mb-2">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" id="modal_nama_lengkap" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" id="modal_tempat_lahir" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="modal_tanggal_lahir" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="modal_jenis_kelamin" required>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-2">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="modal_alamat" required>
          </div>
          <div class="mb-2">
            <label class="form-label">RT/RW</label>
            <input type="text" class="form-control" name="rt_rw" id="modal_rt_rw" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Kelurahan</label>
            <input type="text" class="form-control" name="kelurahan" id="modal_kelurahan" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" id="modal_kecamatan" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Agama</label>
            <input type="text" class="form-control" name="agama" id="modal_agama" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Status Perkawinan</label>
            <input type="text" class="form-control" name="status_perkawinan" id="modal_status_perkawinan" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="modal_pekerjaan" required>
          </div>
          <div class="mb-2">
            <label class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan" id="modal_kewarganegaraan" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Profil Script -->

<script>
function showProfilModal(
  id_daftar, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, rt_rw, kelurahan, kecamatan, agama, status_perkawinan, pekerjaan, kewarganegaraan
) {
  <?php if ($_SESSION['role'] !== 'admin'): ?>
        alert('Anda tidak memiliki akses untuk mengubah data!');
        return false;
    <?php endif; ?>
    
  document.getElementById('modal_id_daftar').value = id_daftar;
  document.getElementById('modal_nama_lengkap').value = nama_lengkap;
  document.getElementById('modal_tempat_lahir').value = tempat_lahir;
  document.getElementById('modal_tanggal_lahir').value = tanggal_lahir;
  document.getElementById('modal_jenis_kelamin').value = jenis_kelamin;
  document.getElementById('modal_alamat').value = alamat;
  document.getElementById('modal_rt_rw').value = rt_rw;
  document.getElementById('modal_kelurahan').value = kelurahan;
  document.getElementById('modal_kecamatan').value = kecamatan;
  document.getElementById('modal_agama').value = agama;
  document.getElementById('modal_status_perkawinan').value = status_perkawinan;
  document.getElementById('modal_pekerjaan').value = pekerjaan;
  document.getElementById('modal_kewarganegaraan').value = kewarganegaraan;
}
</script>






